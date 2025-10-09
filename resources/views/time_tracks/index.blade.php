<x-layout>
  <div class="w-full mx-auto max-w-xl mt-5">
    <div class="flex justify-center text-3xl font-bold border-b-2 border-gray-300 mb-4 pb-2">
      <h1>All Time Tracks</h1>
    </div>
  </div>

  <div class="overflow-x-auto shadow-md rounded-lg border border-gray-200">
    <table class="w-full border-collapse text-sm table-fixed text-center">
      <thead class="bg-gray-100 text-gray-700 uppercase">
        <tr>
          <th class="px-4 py-3 border w-[5%]">#</th>
          <th class="px-4 py-3 border w-[10%]">User ID</th>
          <th class="px-4 py-3 border w-[30%]">Reason</th>
          <th class="px-4 py-3 border w-[20%]">Location</th>
          <th class="px-4 py-3 border w-[10%]">Type</th>
          <th class="px-4 py-3 border">Actions</th>
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
          <td class="px-4 py-3 border text-center">
            <a href="{{ route('time_tracks.edit', $track->id) }}"
              class="bg-yellow-500 text-black px-3 py-1 rounded hover:bg-yellow-600">
              Edit
            </a>

            <form action="{{ route('time_tracks.destroy', $track->id) }}"
              method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit"
                class="bg-red-600 text-black px-3 py-1 rounded hover:bg-red-700"
                onclick="return confirm('Are you sure you want to delete this record?')">
                Delete
              </button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="text-center py-3 text-gray-500">
            No time tracks found.
          </td>
        </tr>
        @endforelse
      </tbody>

    </table>
  </div>

  <div class="mt-6 text-center">
    <a
      href="{{ route('time_tracks.create') }}"
      class="flex justify-center px-10 py-10">
      Add Time Track
    </a>
    </div>
  </div>
</x-layout>

