<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Matchs;
use App\Models\Stadiums;
use App\Models\Zones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['message' => 'អ្នកទទួលពត័មានទាំងអស់', 'data' => event::all(), 'status' => 200]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator::make($request->all(), [
            'name_event' => 'required|max:255',
            'sport_id' => 'required',
            'stadium_id' => 'required',
        ]);
        if ($validate->fails()) {
            return $validate->errors();
        }
        $event = event::create($validate->validated());
        return response()->json(['message' => 'អ្នកបង្កើតបានដោយជោគជ័យ', 'data' => $event, 'status' => 200]);

    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        if($name != null){
            $event = event::where('name_event','like', '%'.$name.'%')->get();
            return response()->json(['message' => 'អ្នកទទួលពត័មាន', 'data' => $event, 'status' => 200]);
        }
        return response()->json(['message' => 'រកមិនឃើញពត័មាន'. $name .'ទេ', 'status' => 200]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = validator::make($request->all(), [
            'name_event' => 'required|max:255',
            'sport_id' => 'required',
            'stadium_id' => 'required',
        ]);
        if ($validate->fails()) {
            return $validate->errors();
        }
        if (event::find($id) != null) {
            $event = event::find($id);
            $event->update($validate->validated());
            return response()->json(['message' => 'អ្នកកែបានដោយជោគជ័យ', 'data' => $event, 'status' => 200]);
        }
        return response()->json(['message' => 'រកមិនឃើញពត័មាន'. $id .'ទេ' , 'status' => 200]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $event = event::Find($id);
        if($event != null) {
            foreach ($event->Matchs as $match) {
                $match->delete();
            }
            $event->delete();
            return response()->json(['message' => 'អ្នកបានលុបបានដោយជោគជ័យ', 'status' => 200]);
        }
        return response()->json(['message' =>'រកមិនឃើញពត័មាន'. $id .'ទេ', 'status' => 200]);
    }
    public function getEventDetail($id){
        $event = event::Find($id);
        if($event != null) {

            $event->Matchs;
            return response()->json(['message' => 'អ្នកទទួលទាំងអស់', 'data' => $event, 'status' => 200]);
        }
        return response()->json(['message' =>'រកមិនឃើញពត័មាន'. $id .'ទេ', 'status' => 200]);
    }

}
