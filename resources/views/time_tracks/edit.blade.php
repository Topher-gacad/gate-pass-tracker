<x-layout>
  <div class="max-w-2xl mx-auto mt-5">
    <h1 class=" mt-4 flex justify-center text-2xl font-bold mb-6  ">Edit Time Track</h1>

    <form action="{{ route('time-tracks.update', $timeTrack->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
      @csrf
      @method('PUT')

      <div>
        <label class="block font-medium mb-1">User ID</label>
        <input type="text" name="User_id" value="{{ $timeTrack->User_id }}" class="w-full border rounded p-2" required>
      </div>

      <div>
        <label class="block font-medium mb-1">Reason</label>
        <textarea name="Reason" class="w-full border rounded p-2" required>{{ $timeTrack->Reason }}</textarea>
      </div>

      <div>
        <label class="block font-medium mb-1">Location</label>
        <input type="text" name="Location" value="{{ $timeTrack->Location }}" class="w-full border rounded p-2" required>
      </div>

      <div>
        <label class="block font-medium mb-1">Type</label>
        <select name="Type" class="w-full border rounded p-2" required>
          <option value="IN" {{ $timeTrack->Type == 'IN' ? 'selected' : '' }}>IN</option>
          <option value="OUT" {{ $timeTrack->Type == 'OUT' ? 'selected' : '' }}>OUT</option>
        </select>
      </div>

      <div class="text-center">
        <button type="submit" class="bg-blue-600 text-black px-6 py-2 rounded hover:bg-blue-700">Update</button>
      </div>
    </form>

    <div class="mt-4 flex justify-center ">
      <a href="{{ route('time-tracks.index') }}" class="text-red-900 hover:underline">Back to List</a>
    </div>
  </div>
</x-layout>
