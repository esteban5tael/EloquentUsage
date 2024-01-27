<?php

namespace App\Http\Controllers;

use App\Models\MyProfile;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $profiles = MyProfile::all();
        // $profiles = MyProfile::orderBy('name', 'asc')->get();
        // $profiles = MyProfile::orderBy('name', 'desc')->get();
        // $profiles = MyProfile::orderBy('name')->paginate(20);
        $profiles = MyProfile::latest('name')->paginate(20);


        return view('system.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MyProfile $myProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyProfile $myProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyProfile $myProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyProfile $myProfile)
    {
        //
    }
}
