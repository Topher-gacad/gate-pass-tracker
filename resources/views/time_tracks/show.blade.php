<!-- "TODO: Update UI elements below" -->
<x-layout>
    <div class="max-w-3xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4 text-center">Time Track Details</h1>

        <div class="bg-gray-100 p-6 rounded shadow space-y-2">
            <p><strong>User ID:</strong> {{ $time_track->User_id }}</p>
            <p><strong>Reason:</strong> {{ $time_track->Reason }}</p>
            <p><strong>Location:</strong> {{ $time_track->Location }}</p>
            <p><strong>Type:</strong> {{ $time_track->Type }}</p>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('time_tracks.index') }}" class="text-blue-500 hover:underline">← Back to list</a>
        </div>
    </div>
</x-layout>
