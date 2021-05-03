<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $specialists = Specialist::all();
        return view('backend.profile.index', compact('user', 'specialists'));
    }

    public function update(Request $request){
        $request->validate([
            'image' => 'nullable|image',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.\auth()->user()->id,
            'old_password' => 'nullable|string|required_with:password',
            'password' => 'nullable|min:6|required_with:password_confirmation|same:password_confirmation',
            'designation' => 'nullable|string',
            'phone' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'skype' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->designation = $request->designation;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->skype = $request->skype;
        $user->linkedin = $request->linkedin;
        if($request->hasFile('image')){
            if (get_static_option('image') != null)
                File::delete(public_path(get_static_option('image'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/';
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $user->avatar = $folder_path.$image_new_name;
        }
        if ($request->old_password){
            $hashedPassword = Auth::user()->password;
            if (Hash::check($request->old_password, $hashedPassword)) {
                if (!Hash::check($request->password, $hashedPassword)) {
                    $user->password = bcrypt($request->password);
                } else {
                    return back()->withErrors('New password can not be the old password !');
                }
            } else {
                return back()->withErrors('Old password doesnt matched !');
            }
        }
        try {
            $user->save();
            return back()->withSuccess('Successfully profile updated!');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }
}
