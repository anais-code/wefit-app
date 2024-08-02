<?php

namespace App\Models;

use CodeIgniter\Model;

class AppointmentModel extends Model
{
    //initialise variables
    protected $table = 'appointment';
    protected $primaryKey = 'AppointmentID';
    protected $allowedFields = ['MemberID',  'StaffID', 'ServiceID', 'AppointmentDate', 'AppointmentTime', 'Details'];

    public function bookAppointment($data)
    {
        //insert new appointment into wefit_db
        return $this->insert($data);
    }

    //method which gets the upcoming appointments for a member
    //takes in memberID as a parameter and filters members
    public function viewAppointments($memberID)
    {
        return $this -> select('appointment.*, service.ServiceName, staff.FirstName, staff.LastName')
        ->join('service', 'service.ServiceID = appointment.ServiceID')
        ->join('staff', 'staff.StaffID = appointment.StaffID')
        ->where('appointment.MemberID', $memberID)
        ->where('AppointmentDate >=', date('Y-m-d'))
        ->findAll();
    }

    //method for staff to view appointments
    //takes in staff ID as a parameter and filters staff to avoid duplicate sessions with club member
    //yes, that was an error that I spent way too long trying to fix
    public function viewStaffAppointments($staffID)
    {
        return $this->select('appointment.*, service.ServiceName, clubmember.FirstName, clubmember.LastName')
        ->join('service', 'service.ServiceID = appointment.ServiceID')
        ->join('clubmember', 'clubmember.MemberID = appointment.MemberID')
        ->where('appointment.StaffID', $staffID)
        ->where('AppointmentDate >=', date('Y-m-d'))
        ->findAll();
    }
}
