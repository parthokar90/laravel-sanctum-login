<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function dashboard(){

       $user = Auth::user();
       return response()->json($user);

    }
}
