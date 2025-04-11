<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customerPage ()
    {
        return view('pages.dashboard.customer-page');
    }
}
