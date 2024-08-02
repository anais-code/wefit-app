<?php

namespace App\Controllers;
use App\Models\ClubMemberModel;

class Signup extends BaseController
{
    public function index()
    {
        return view('signup');
    }

    //function to register new club members
    //info is sent to wefit_db
    public function register()
    {
        if($this->request->getMethod() === 'post'){
            //gets data from the form
            $firstName = $this->request->getPost('first-name');
            $lastName = $this->request->getPost('last-name');
            $email = $this->request->getPost('user-email');
            $password = $this->request->getPost('user-password');
            $phoneNumber = $this->request->getPost('phone-num');

            //insert member sign up info to wefit_db via the model
            //goes directly to login if sign up was successful
            $clubMemberModel = new ClubMemberModel();
            $data = [
                'FirstName' => $firstName,
                'LastName' => $lastName,
                'Email' => $email,
                'Password' => $password,
                'PhoneNumber' => $phoneNumber,
            ];
            $clubMemberModel->register($data);
            return redirect()->to(base_url('login'));
        }
        //back to sign up if it is not a post method aka no sign up happened
        return redirect()->to(base_url('signup'));
    }
}
