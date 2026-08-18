<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Student Information',
            'student_id' => '2024-00067',
            'name' => 'Riza C. Anilao',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => '3F2',
            'email' => 'riza.anilao17@email.com'
        ];

        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'My Student Profile',
            'student_id' => '2024-00067',
            'name' => 'Riza C. Anilao',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => '3F2',
            'email' => 'riza.anilao17@email.com'
        ];

        $this->call->view('student_profile', $data);
    }
}