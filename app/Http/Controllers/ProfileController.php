<?php

namespace App\Http\Controllers;


use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index()
    {
        return view('profile.index');        
    }

    public function create(Request $request)
    {
        $image = $request["profile_image"]->store('uploads','public');

        $profile = new Profile();
        $profile->first_name = $request["firstname"];
        $profile->last_name = $request["lastname"];
        $profile->dob = $request["dob"];
        $profile->image_url = $image;
        $profile->user_id = auth()->user()->id;

        $profile->save();

        return redirect(route('/'));
    }

}
