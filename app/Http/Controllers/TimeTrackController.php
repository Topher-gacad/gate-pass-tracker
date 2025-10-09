<?php

namespace App\Http\Controllers;

use App\Models\timeTrack;
use Illuminate\Http\Request;

class TimeTrackController extends Controller
{
    public function index()
    {
        $time_tracks = timeTrack::latest()->get(); return view('time_tracks.index', compact('time_tracks'));
    }

    public function create()
    {
        return view('time_tracks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'reason' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|in:IN,OUT',
        ]);

        timeTrack::create($validated);

        return redirect()->route('time_tracks.index') ->with('success', 'Time track added successfully!');
    }

    public function show(timeTrack $timeTrack)
    {
        return view('time_tracks.show', compact('timeTrack'));
    }

    public function edit(timeTrack $timeTrack)
    {
        return view('time_tracks.edit', compact('timeTrack'));
    }

    public function update(Request $request, timeTrack $timeTrack)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'reason' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|in:IN,OUT',
        ]);

        $timeTrack->update($validated);

        return redirect()->route('time_tracks.index')->with('success', 'Time track updated successfully!');
    }

    public function destroy(timeTrack $timeTrack)
    {
        $timeTrack->delete();

        return redirect()->route('time_tracks.index')->with('success', 'Time track deleted successfully!');
    }
}
