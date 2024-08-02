<?php

namespace App\Controllers;

use App\Models\StaffModel;
use App\Models\AppointmentModel;

class StaffDashboard extends BaseController
{
    public function index()
    {
        //instance of staff model
        //will be used to get their first name for display purposes based on session
        $staffModel = new StaffModel();
        $staffID = session()->get('staff_id');
        $staff = $staffModel->find($staffID);
        $firstName = $staff['FirstName'];

        //instance of appointment model
        //get staff appointments from the model
        $appointmentModel = new AppointmentModel();
        $viewAppointments = $appointmentModel->viewStaffAppointments($staffID);

        //pass their information to the view
        $data =[
            'firstName' => $firstName,
            'viewAppointments' => $viewAppointments
        ];
        return view('staff_dash', $data);
    }
}
