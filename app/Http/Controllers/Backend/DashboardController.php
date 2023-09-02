<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Home;
use Str;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
   return view('backend.dashboard.list');

    }
    public function admin_home(Request $request)
    {
   return view('backend.home.list');

    }

    public function admin_home_post(Request $request)
    {
        $insertRecord = new Home;
        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->who_am_i = trim($request->who_am_i);
        $insertRecord->personal_info = trim($request->personal_info);
        $insertRecord->my_expertise = trim($request->my_expertise);
        $insertRecord->description = trim($request->description);
    
        if ($request->hasFile('profile_image')) {
          $file = $request->file('profile_image');
      
          if ($file->isValid()) {
              $randomStr = Str::random(30);
              $filename = $randomStr . '.' . $file->getClientOriginalExtension();
              $file->move('public/assets/imgs', $filename);
              $insertRecord->profile_image = 'public/assets/imgs/' . $filename;
          } else {
              // Handle invalid file here, e.g., return an error response
              return redirect()->back()->with('error', 'Invalid file upload.');
          }
      }
      
    
        $insertRecord->save();
    
        return view('backend.home.list', compact('insertRecord'))->with('success', "Home Page Successfully saved");
    }
    



    public function admin_about(Request $request)
    {

  return view('backend.about.list');
    }

    public function admin_resume(Request $request)
    {

  return view('backend.resume.list');
    }

    public function admin_portfolio(Request $request)
    {

  return view('backend.portfolio.list');
    }

    public function admin_blog(Request $request)
    {

  return view('backend.blog.list');
    }

    public function admin_myEvents(Request $request)
    {

  return view('backend.myEvents.list');
    }

    public function admin_contact(Request $request)
    {

  return view('backend.contact.list');
    }
}
