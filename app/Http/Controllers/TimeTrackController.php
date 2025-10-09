<?php

namespace App\Http\Controllers;

use App\Models\TimeTrack;
use Illuminate\Http\Request;

class TimeTrackController extends Controller
{
    public function index()
    {
        $time_tracks = TimeTrack::latest()->get();
        return view('time_tracks.index', compact('time_tracks'));
    }

    public function create()
    {
        return view('time_tracks.create');
    }

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

    public function show(TimeTrack $timeTrack)
    {
        return view('time_tracks.show', compact('timeTrack'));
    }

    public function edit(TimeTrack $timeTrack)
    {
        return view('time_tracks.edit', compact('timeTrack'));
    }

    public function update(Request $request, TimeTrack $timeTrack)
    {
        $validated = $request->validate([
            'User_id' => 'required|integer',
            'Reason' => 'required|string|max:255',
            'Location' => 'required|string|max:255',
            'Type' => 'required|string|in:IN,OUT',
        ]);

        $timeTrack->update($validated);

        return redirect()->route('time_tracks.index')
            ->with('success', 'Time track updated successfully!');
    }

    public function destroy(TimeTrack $timeTrack)
    {
        $timeTrack->delete();

        return redirect()->route('time_tracks.index')
            ->with('success', 'Time track deleted successfully!');
    }
}
