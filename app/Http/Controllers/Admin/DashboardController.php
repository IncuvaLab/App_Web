<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }

    public function teacherList(){
        return view('admin.teacherList');
    }
    public function teams(){
        return view('admin.teams');
    }
    public function progress(){
        return view('admin.progress');
    }
    public function editTeacher(){
        return view('admin.editTeacher');
    }

}
