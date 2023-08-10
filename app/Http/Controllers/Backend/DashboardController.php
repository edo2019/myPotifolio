<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
   return view('backend.dashboard.list');

    }
    public function admin_home()
    {
   return view('backend.home.list');

    }
    public function admin_about()
    {

  return view('backend.about.list');
    }

    public function admin_resume()
    {

  return view('backend.resume.list');
    }

    public function admin_portfolio()
    {

  return view('backend.portfolio.list');
    }

    public function admin_blog()
    {

  return view('backend.blog.list');
    }

    public function admin_myEvents()
    {

  return view('backend.myEvents.list');
    }

    public function admin_contact()
    {

  return view('backend.contact.list');
    }
}
