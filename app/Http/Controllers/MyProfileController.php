<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\MyProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Responses\ApiResponse as ApiR;

class MyProfileController extends Controller
{

    public function adsByUser()
    {
        // 10 Lesson
        // calucalr el numero total de anuncion por usuario

        $adsByUser = MyProfile::all()->random()->first()

            ->ads()
            ->count();



        return ApiR::success('Ads by User', $adsByUser);
    }

    public function index09Lesson()
    {
        $data = MyProfile::query()
            ->whereHas('ads')
            ->where('status', true)
            ->with('ads')
            ->count('id')
            // ->paginate(5)
            // 
        ;



        return response()->json([$data], 200);
    }

    public function index08Lesson()
    {

        // $profiles = MyProfile::all();
        // $profiles = MyProfile::orderBy('name', 'asc')->get();
        // $profiles = MyProfile::orderBy('name', 'desc')->get();
        // $profiles = MyProfile::orderBy('name')->paginate(20);

        /* 
        $profiles = MyProfile::latest('name')->paginate(20);
        return view('system.profiles.index', compact('profiles'));
         */

        /* 
        CONSULTAS POR RELACIONES
        */

        /* $ads = MyProfile::query()
            ->with('ads')
            ->get();

        return response()->json($ads); */

        /* $profile = MyProfile::query()
            ->findOrFail(1)->ads()->get();

        // $ads = $profile->ads()->get();

        return response()->json($v); */

        /* $data=MyProfile::query()
        ->has('ads')
        ->with('ads')
        ->get(); */

        /* $data=MyProfile::query()
        ->whereHas('ads',function($query){
            $query->where( 'status',true );
        })
        ->with('ads')
        ->get(); */

        $data = User::query()
            ->with('profile.ads')
            ->get()
            // 
        ;


        return response()->json($data);
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
