<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('profilePics');
        $profile = auth()->user()->profile;
        $profile->profile_image = $path;
        $profile->save();

        return redirect('/member/')->with('message', 'Image Upload successful');

    }
}
