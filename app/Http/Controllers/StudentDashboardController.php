<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function getStudentDashboard(){
        $user = User::find(auth()->user()->id);
        $userDetails = $user->userDetails;
        return view('student-dashboard', ['userDetails'=>$userDetails, 'user'=>$user]);
    }
}
