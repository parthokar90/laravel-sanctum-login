<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    public function profile(){

       $user = Auth::user();
       return response()->json($user);

    }
}