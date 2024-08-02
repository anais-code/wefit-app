<?php

namespace App\Controllers;
use App\Models\AppointmentModel;

class AppointmentsController extends BaseController
{
    //saving model as a variable
    private $appointmentModel;

    public function __construct()
    {
        //make sure member is authenticated before booking
        $this->authenticateMember();

        //initialise model
        $this->appointmentModel = new AppointmentModel();
    }

    //automatically goes to booking page for club member
    public function index(): string
    {
        return view('club_member_book');
    }

    //method which authenticates club member
    //checks if they currently have a session
    //this denies people who aren't logged in the ability to book sessions
    private function authenticateMember()
    {
        //check if the member was authenticated
        if(!session()->has('user_id'))
        {
            return redirect()->to(base_url('login'))->with('error', 'You need to be logged in to access this page');
        }
    }

    //method to for member to book appointment
    //takes input from form in club_member_book 
    public function bookAppointment()
    {
        //get data from booking form
        $classType = $this->request->getPost('classType');
        $date = $this->request->getPost('dateInput');
        $time = $this->request->getPost('timeSelect');
        $notes = $this->request->getPost('floatingTextarea');

        //get user_id of member from session
        $userID = session()->get('user_id');

        //map class to ServiceID
        list($serviceID, $staffID) = $this->getServiceAndStaffId($classType);

        //format the time input so that it aligns with db format
        $formattedTime = substr_replace($time, ':', -2, 0);

        //get data to be inserted
        $data = [
            'MemberID' => $userID,
            'StaffID' => $staffID,
            'ServiceID' => $serviceID,
            'AppointmentDate' => $date,
            'AppointmentTime' => $formattedTime,
            'Details' => $notes,
        ];

        //insert appointment in appointment table in wefit_db
        if($this->appointmentModel->bookAppointment($data))
        {
            //go to dashboard (view appointments) if booking is successful
            return redirect()->to(base_url('club_member_dash'))->with('success', 'Your appointment has been booked. See you soon!');
        }
        else
        {
            //refresh page if the appointment cannot be booked
            return redirect()->to(base_url('club_member_book'))->with('error', 'Sorry your appointment could not be booked. Please try again');
        }
    }

    //method to map the classes to services and staff based on staffID and serviceID
    private function getServiceAndStaffID($classType)
    {
        $serviceID = null;
        $staffID = null;

        switch($classType){
            case 'ashtanga':
                $serviceID = 1;
                $staffID = 1;
                break;
            case 'beach-vinyasa':
                $serviceID = 2;
                $staffID = 1;
                break;
            case 'pilates-classic':
                $serviceID = 3;
                $staffID = 2;
                break;
            case 'pilates-reformer':
                $serviceID = 4;
                $staffID = 2;
                break;
            case 'spin-hiit':
                $serviceID = 5;
                $staffID = 3;
                break;
            case 'spin-endure':
                $serviceID = 6;
                $staffID = 3;
                break;
            case 'barre-ballet':
                $serviceID = 7;
                $staffID = 4;
                break;
            case 'barre-flex':
                $serviceID = 8;
                $staffID = 4;
                break;
            case 'membership-consult':
                $serviceID = 9;
                $staffID = 5;
                break;
            case 'nutrition-consult':
                $serviceID = 10;
                $staffID = 6;
                break;
            case 'fitness-consult':
                $serviceID = 11;
                $staffID = 7;
                break;
            default:
                return null;
                break;
        }
        return[$serviceID, $staffID];
    }
}
