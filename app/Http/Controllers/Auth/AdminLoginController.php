<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

   public function showLoginForm(){
      return view('auth.admin-login');
   }

   public function login(Request $request){
      //validate the form data
      $this->validate($request, [
         'email' => 'required|email',
         'password' => 'required|min:6',
      ]);
      //attempt to log the user in
      //if succesfull, then redirect to their intended location
      //if unsuccesfull, then redirect back to the login with the form data
   }
}
