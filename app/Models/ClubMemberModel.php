<?php

namespace App\Models;

use CodeIgniter\Model;

class ClubMemberModel extends Model
{
    //intialise variables
    protected $table = 'clubmember';
    protected $primaryKey = 'MemberID';
    protected $allowedFields = ['FirstName', 'LastName', 'Email', 'Password', 'PhoneNumber'];

    //register function which inserts the member data
    public function register($data)
    {
        //insert new member info into database
        return $this -> insert($data);
    }

    //find member email and password to validate login from db end
    public function validateLogin($email, $password)
    {
        //get member by email
        $user = $this->where('Email',$email)->first();

        //check if member exists and return them
        //this will be used in other files to create a session
        if($user && password_verify($password, $user['Password']));
        {
            return $user;
        }
        return null;
    }
}