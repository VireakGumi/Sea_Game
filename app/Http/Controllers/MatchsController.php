<?php

namespace App\Http\Controllers;

use App\Models\Matchs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatchsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = validator::make($request->all(), [
            'matching' => 'nullable|max:255',
            'dateTime' => 'required',
            'description' => 'nullable|max:5000',
            'event_id' => 'required'
        ]);
        if ($validate->fails()) {
            return $validate->errors();
        }
        $event = Matchs::create($validate->validated());
        return response()->json(['message' => 'អ្នកបង្កើតបានដោយជោគជ័យ', 'data' => $event, 'status' => 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Matchs $matchs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matchs $matchs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matchs $matchs)
    {
        //
    }
}
