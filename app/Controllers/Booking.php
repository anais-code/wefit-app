<?php

namespace App\Controllers;

class Booking extends BaseController
{
    public function index(): string
    {
        return view('club_member_book');
    }
}
