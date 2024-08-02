<?php

namespace App\Controllers;
use App\Models\ClubMemberModel;
use App\Models\StaffModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    //this method validates login information for both members and staff
    //it searches for a club member first and if one is not found it moves on to staff table
    public function login()
    {
        //create instances of models to validate login for either member/staff
        $clubMemberModel = new ClubMemberModel();
        $staffModel = new StaffModel();

        //getting input from login form
        $email = $this ->request->getPost('user-email');
        $password = $this ->request->getPost('user-password');

        //validate login via a match
        $clubMember = $clubMemberModel->validateLogin($email, $password);
        if($clubMember){

            //create a session for the member
            //this will be used to preserve their info as they navigate through the app
            session()->set('user_id', $clubMember['MemberID']);
            //redirect to dashboard if member is found
            return redirect()->to(base_url('club_member_dash'));
        }

        $staff = $staffModel->validateStaffLogin($email, $password);
        if($staff){
            //create a session for the floor staff
            //this will be used to preserve their info as they navigate through the app
            session()->set('staff_id', $staff['StaffID']);
            //redirect to dashboard if floor staff is found
            return redirect()->to(base_url('staff_dash'));
        }
        return redirect()->back()->with('error', 'Please check your email or password');
    }
}