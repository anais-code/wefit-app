<?php

namespace App\Controllers;
use App\Models\AppointmentModel;
use App\Models\ClubMemberModel;

class ClubMemberDashboard extends BaseController
{
    public function index()
    {
        //instance of club member model
        //will be used to get their first name for display purposes based on session
        $clubMemberModel = new ClubMemberModel();
        $memberID = session()->get('user_id');
        $member = $clubMemberModel->find($memberID);
        $firstName = $member['FirstName'];

        //instance of appointment model
        //get member appointments from the model
        $appointmentModel = new AppointmentModel();
        $viewAppointments = $appointmentModel->viewAppointments($memberID);

        //pass their information to the view
        $data =[
            'firstName' => $firstName,
            'viewAppointments' => $viewAppointments
        ];
        return view('club_member_dash', $data);
    }
}
