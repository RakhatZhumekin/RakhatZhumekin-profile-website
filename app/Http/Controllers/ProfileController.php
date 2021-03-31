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
                $extension = $request->photo->getClientOriginalExtension();
                $fileName = $request->photo->getClientOriginalName();
                $request->file('photo')->storeAs('/images', $fileName);
                $url = Storage::url($fileName);
                $profile = Profile::create([
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'email' => $request->email,
                    'photo' => $url
                ]);
                return back();
            }
        }
        else {
            abort(501, 'Could not upload image :(');
        }
    }
}
