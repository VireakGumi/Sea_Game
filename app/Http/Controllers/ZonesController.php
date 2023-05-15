<?php

namespace App\Http\Controllers;

use App\Models\Zones;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(['message' => 'អ្នកទទួលទាំងអស់', 'data' => Zones::all(), 'status' => 200]);
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
    public function show(Zones $zones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zones $zones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zones $zones)
    {
        //
    }
}
