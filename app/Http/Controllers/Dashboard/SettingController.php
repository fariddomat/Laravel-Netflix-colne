<?php

namespace App\Http\Controllers\Dashboard;

use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function social_login()
    {
        return view('dashboard.settings.social_login');
        
    }

    public function social_links()
    {
        return view('dashboard.settings.social_links');
    }

    public function store(Request $request)
    {
        setting($request->all())->save();
        
        Session::flash('success','Successfully added !');
        return redirect()->back();
    }
}
