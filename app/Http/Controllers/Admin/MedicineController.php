<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::OrderBy('id', 'desc')->get();
        return view('backend.admin.medicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string|unique:medicines,name',
           'company' => 'required|string',
           'image' => 'nullable|image',
        ]);

        $medicine= new Medicine();
        $medicine->slug =   Str::slug($request->name, '-');
        $medicine->name =   $request->name;
        $medicine->company  =   $request->company;
        $medicine->image    =   $request->image;
        if($request->hasFile('image')){
            if (get_static_option('image') != null)
                File::delete(public_path(get_static_option('image'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/medicine/';
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $medicine->image = $folder_path.$image_new_name;
        }
        try {
            $medicine->save();
            return back()->withSuccess('Successfully medicine updated!');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        return view('backend.admin.medicine.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        return view('backend.admin.medicine.edit', compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'name' => 'required|string|unique:medicines,name,'.$medicine->id,
            'company' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $medicine->slug =   Str::slug($request->name, '-');
        $medicine->name =   $request->name;
        $medicine->company  =   $request->company;
        $medicine->image    =   $request->image;
        if($request->hasFile('image')){
            if (get_static_option('image') != null)
                File::delete(public_path(get_static_option('image'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/medicine/';
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $medicine->image = $folder_path.$image_new_name;
        }
        try {
            $medicine->save();
            return back()->withSuccess('Successfully medicine created!');
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        try {
            if ($medicine->image != null)
                File::delete(public_path($medicine->avatar)); //Old image delete
            $medicine->delete();
            return response()->json([
                'type' => 'success',
                'message' => ''
            ]);
        }catch (\Exception$exception){
            return response()->json([
                'type' => 'error',
                'message' => ''
            ]);
        }
    }
}
