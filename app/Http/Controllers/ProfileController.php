<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index() {
        $profiles = Profile::all();
        
        return view('profiles.index')->with(['profiles'=>$profiles]);
    }

    public function store(Request $request) {
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $validated = $request->validate([
                    'photo' => 'mimes:jpeg,png',
                ]);
                $file = $request->file('photo');
                $path = 'images';
                $file->move($path, $file->getClientOriginalName());
                $path = '/images/'.$file->getClientOriginalName();
                $profile = Profile::create([
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'email' => $request->email,
                    'photo' => $path
                ]);
                return back();
            }
        }
        else {
            abort(501, 'Could not upload image :(');
        }
    }
}
