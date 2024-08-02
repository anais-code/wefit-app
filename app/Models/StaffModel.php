<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    //intialise variables
    protected $table = 'staff';
    protected $primaryKey = 'StaffID';
    protected $allowedFields = ['FirstName', 'LastName', 'Email', 'Password', 'PhoneNumber'];

    //validate staff login from db end
    public function validateStaffLogin($email, $password)
    {
        //get staff by email
        $staff = $this->where('Email',$email)->first();

        //check if staff exists
        if($staff && password_verify($password, $staff['Password']));
        {
            return $staff;
        }
        return null;
    }
}