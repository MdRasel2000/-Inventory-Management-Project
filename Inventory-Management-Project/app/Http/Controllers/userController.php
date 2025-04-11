<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
     public function registrationPage()
     {
        
        return view('pages.auth.registration-page');

     }

     public function loginPage()
     {
        
        return view('pages.auth.login-page');

     }


     public function resetPasswordPage()
     {
 
        return view('pages.auth.reset-pass');

     }

     public function sendOtpPage()
     {
           return view('pages.auth.send-otp');

     }

     public function verifyOtpPage()
     {
           return view('pages.auth.verify-otp');

     }


     public function userProfile()
     {

      return view('pages.dashboard.profile-page');
     }


}

