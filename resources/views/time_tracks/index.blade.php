<x-layout>
  <div class="w-full mx-auto max-w-6xl mt-10">
    <div class="w-full flex justify-center items-center text-3xl font-bold border-b-2 border-gray-300 mb-4">
      <h1 class="text-center">
        All Time Tracks
      </h1>
    </div>

    <div class="overflow-x-auto shadow-md rounded-lg border border-gray-200">
      <table class="w-full border-collapse text-sm table-fixed text-center">
        <thead class="bg-gray-100 text-gray-700 uppercase">
          <tr>
            <th class="px-4 py-3 border w-[5%]">#</th>
            <th class="px-4 py-3 border w-[10%]">User ID</th>
            <th class="px-4 py-3 border w-[45%]">Reason</th>
            <th class="px-4 py-3 border w-[25%]">Location</th>
            <th class="px-4 py-3 border w-[15%]">Type</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($time_tracks as $index => $track)
          <tr class="hover:bg-gray-50 border-b">
            <td class="px-4 py-3 border">{{ $index + 1 }}</td>
            <td class="px-4 py-3 border">{{ $track->User_id }}</td>
            <td class="px-4 py-3 border break-words">{{ $track->Reason }}</td>
            <td class="px-4 py-3 border">{{ $track->Location }}</td>
            <td class="px-4 py-3 border">{{ $track->Type }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center py-3 text-gray-500">No time tracks found.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="mt-6 text-center">
      <a href="{{ route('time_tracks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Time Track</a>
    </div>
  </div>
</x-layout>