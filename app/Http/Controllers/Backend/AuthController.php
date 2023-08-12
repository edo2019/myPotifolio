<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

use App\Models\User;
use Auth;
use Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('backend.auth.login');
    }

    public function forgot(Request $request)
    {
        return view('backend.auth.forgot');
    }

    public function login_admin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            // Attempt to authenticate the user with provided email and password

            if (!empty(Auth::user()->status)) {
                // Check if the user's status is not empty (assuming status is verified)

                if (Auth::user()->is_role == '1') {
                    // Check if the user's role is admin (assuming admin role is '1')
                    return redirect()->intended('admin/dashboard');
                    // Redirect the admin to the admin dashboard
                } else {
                    return redirect('login')->with('error', 'This account is not Admin');
                    // Redirect the user to the login page with an error message
                }
            } else {
                $user_id = Auth::user()->id;
                Auth::logout();
                // Log out the user
                $user = User::find($user_id);
                // Find the user based on their ID
                return redirect('login')->with('success', 'This account is not verified yet');
                // Redirect the user to the login page with a success message
            }
        } else {
            return redirect()->back()->with('error', 'Please enter the correct credentials');
            // Redirect the user back to the login page with an error message
        }
    }
 //logout start
 public function logout(){
      Auth::logout();
      return redirect(url('login'));
    
    
    
    }


//logout ends

}
 