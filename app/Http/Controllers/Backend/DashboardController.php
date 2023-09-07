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

   $data['getrecord'] = Home::all();
   return view('backend.home.list', $data);

    }

    public function admin_home_post(Request $request)
    {

       if($request->add_to_update == "add"){
          $insertRecord = request()->validate([
            'profile'               => 'required'
          ]);
        $insertRecord = new Home;

       }else{

        $insertRecord = Home::find($request->id);
       }


       
        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->who_am_i = trim($request->who_am_i);
        $insertRecord->personal_info = trim($request->personal_info);
        $insertRecord->my_expertise = trim($request->my_expertise);
        $insertRecord->description = trim($request->description);
    
      if(!empty($request->file('profile_image'))){
         if(!empty($insertRecord->profile_image)&& file_exists
            ('public/assets/imgs/'.$insertRecord->profile_image))  
         {
             unlink('public/assets/imgs/'.$insertRecord_profile_image);

         }


          $file        =$request->file('profile_image');
          $randomStr   =Str::random(30);
          $filename    =$randomStr . '.' . $file->
                 getClientOriginalExtension();
          $file->move('public/assets/imgs/',$filename);
          $insertRecord->profile_image = $filename;
  
      }
      
    
        $insertRecord->save();
    
        return redirect()->back()->with('success', "Home Page Successfully saved");
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
