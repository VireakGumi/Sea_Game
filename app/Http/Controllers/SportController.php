<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['message' => 'អ្នកទទួលប្រភេទទាំងអស់នៃកីឡា', 'data' => Sport::all(), 'status' => 200]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        if (!$validated->fails()) {
            $sport = Sport::create([
                'name' => $request->name,
            ]);
            return response()->json(['messages' => 'អ្នកបង្កើតបានដោយជោគជ័យ', 'data' => $sport, 'status' => 200]);
        }
        return $validated->errors();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return response()->json(['message' => 'អ្នកទទួលប្រភេទកីឡាតាមលេខរៀង' . $id, 'data' => Sport::find($id), 'status' => 200]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $sport = Sport::find($id);
        $sport->update([
            'name' => $request->name
        ]);
        return response()->json(['messages' => 'អ្នកបង្កើតបានដោយជោគជ័យ', 'data' => $sport, 'status' => 200]);
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $sport = Sport::find($id)->delete();
        return response()->json(['messages' => 'អ្នកលុបបានដោយជោគជ័យ', 'status' => 200]);

    }
}
