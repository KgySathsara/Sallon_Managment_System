<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Appointment;
use App\Models\Photo;
use App\Models\Service;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }


    public function profile()
{
    return view('profile.index');
}
public function updateProfilePicture(Request $request)
{
    $request->validate([
        'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // 2048 kilobytes = 2 megabytes
    ]);

    $user = Auth::user();

    if ($request->hasFile('profile_picture')) {
        // Check if the file size exceeds the limit
        $maxFileSize = 2048 * 1024; // Convert to kilobytes
        if ($request->file('profile_picture')->getSize() > $maxFileSize) {
            return redirect()->route('profile')->with('error', 'File size exceeds the limit.');
        }

        // Delete existing profile picture
        if ($user->profile_picture) {
            Storage::disk('public')->delete($user->profile_picture);
        }

        // Store new profile picture
        $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        $user->profile_picture = $profilePicturePath;
        $user->save();
    }

    return redirect()->route('profile')->with('success', 'Profile picture updated successfully.');
}
public function update(Request $request)

    {
        $request -> validate([
            'name' => 'string',
            'age' => 'numeric',
            'mid' => 'string',
            'nic' => 'string',
            'number' => 'numeric',
        ]);

        $user = Auth::user();
        $user->update([
        'name' => $request->name,
        'age' => $request->age,
        'mid' => $request->mid,
        'nic' =>  $request->nic,
        'number' => $request->number,
    ]);
    return redirect()->route('profile')->with('success', 'Profile updated successfully.');

}
}
