<?php

namespace App\Http\Controllers;

use App\Models\TimeTrack;
use Illuminate\Http\Request;

class TimeTrackController extends Controller
{
    public function index()
    {
        $timeTracks = TimeTrack::latest()->get();

        return view('time_tracks.index', compact('timeTracks'));
    }

    public function create()
    {
        return view('time_tracks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|uuid|exists:users,id',
            'reason' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|in:in,out',
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
            'user_id' => 'uuid|exists:users,id',
            'reason' => 'string|max:255',
            'location' => 'string|max:255',
            'type' => 'string|in:in,out',
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
