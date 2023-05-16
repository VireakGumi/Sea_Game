<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Ticket;
use App\Models\Zones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(['message' => 'អ្នកទទួលទាំងអស់', 'data' => Ticket::all(), 'status' => 200]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = validator::make($request->all(), [
            'code' => 'required|max:5|min:5',
            'event_id' => 'required',
            'zone_id' => 'required',
        ]);
        if ($validate->fails()) {
            return $validate->errors();
        }
        $event = event::find($request->event_id);
        $zone = Zones::where('id',$request->zone_id)->where('stadium_id', $event->stadium_id)->first();   
        $tickets = Ticket::all();
        $count = 0;
        foreach ($tickets as $ticket) {
            if ($ticket->zone_id == $zone->id ){
                $count += 1;
            }
        }
        if ($count < $zone->number_of_ticket){
            $ticket = Ticket::create($validate->validated());
            return response()->json(['message' => 'អ្នកបានទទួលសំបុត្រដោយជោគជ័យ', 'data' => $ticket, 'status' => 200]);
        }
        return response()->json(['message' => 'សុំអភ័យទោសំបុត្រនៅទីតាំង ' . $zone->zone_name . ' បានអស់ហើយ', 'status' => 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
