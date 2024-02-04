<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $ads = Ad::paginate(20);
        $ads = Ad::query()
            ->where('status', true)
            // ->where('visit','>',50)
            // ->orWhere('visit','>',50)
            // ->whereIn('visit', [14, 31, 54])
            // ->whereNotIn('visit', [14, 31, 54])
            // ->whereBetween('visit', [50, 100])
            // ->whereNotBetween('visit', [50, 100])
            // ->whereNull('status')
            // ->whereNotNull('status')
            // ->whereDay('created_at',now())
            // ->whereYear('created_at',2024)
            // ->whereMonth('created_at',1)
            // ->whereDay('created_at',1)
            ->whereColumn('created_at','updated_at')//una columna igual a la otra
            ->paginate(20);

        return view('system.ads.index', compact('ads'));
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
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        //
    }
}
