<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Illuminate\Console\View\Components\Alert;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();

        return view('profile', [
            'user' => Auth::user(),
            'profile' => $profile,
        ]);
    }

    public function create()
    {
        return view('createProfile');
    } 
    
    public function postCreate()
    {
        $data = request()->validate([
            'description' => 'required',
            'profilepic' => ['required', 'image']
        ]);

        $imagePath = request('profilepic')->store('uploads', 'public');

        $user = Auth::user();
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->description = request('description');
        $profile->image = $imagePath;
        $saved = $profile->save();

        if($saved){
            return redirect('/profile');
        }else{
            echo '<script>alert("Cannot save profile image!")</script>';
        }
    }
}
