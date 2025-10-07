<?php

namespace App\Http\Controllers;

use App\Models\TimeTrack;
use Illuminate\Http\Request;

class TimeTrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $time_tracks = TimeTrack::all();
        return view('time_tracks.index', 
        compact('time_tracks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('time_tracks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'User_id' => 'required|integer',
            'Reason' => 'required|string|max:255',
            'Location' => 'required|string|max:255',
            'Type' => 'required|string|in:IN,OUT',
        ]);

        TimeTrack::create($validated);

        return redirect()->route('time_tracks.index')
            ->with('success', 'Time track added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TimeTrack $timeTrack)
    {
        // Thanks to route model binding, we can use $timeTrack directly
          return view('time_tracks.show', 
          compact('time_track'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TimeTrack $timeTrack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TimeTrack $timeTrack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TimeTrack $timeTrack)
    {
        //
    }
}
