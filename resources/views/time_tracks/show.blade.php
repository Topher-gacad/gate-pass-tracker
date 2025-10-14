<!-- "TODO: Update UI elements below" -->
<x-layouts.auth>
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Time Track Details</h1>

        <div class="space-y-3">
            <p><strong>User ID:</strong> {{ $timeTrack->User_id }}</p>
            <p><strong>Reason:</strong> {{ $timeTrack->Reason }}</p>
            <p><strong>Location:</strong> {{ $timeTrack->Location }}</p>
            <p><strong>Type:</strong> {{ $timeTrack->Type }}</p>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('time-tracks.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                Back
            </a>                                                                           

            <a href="{{ route('time-tracks.edit', $timeTrack->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                Edit
            </a>
        </div>
    </div>
<x-layouts.auth>