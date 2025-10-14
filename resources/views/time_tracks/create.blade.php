<!-- "TODO: Update UI elements below" -->
<x-layouts.auth>
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6 text-center">Create Time Track</h1>

        <form action="{{ route('time-tracks.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
            @csrf
            <div>
                <label class="block font-medium mb-1">User ID</label>
                <input type="text" name="User_id" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium mb-1">Reason</label>
                <textarea name="Reason" class="w-full border rounded p-2" required></textarea>
            </div>

            <div>
                <label class="block font-medium mb-1">Location</label>
                <input type="text" name="Location" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium mb-1">Type</label>
                <select name="Type" class="w-full border rounded p-2" required>
                    <option value="">-- Select Type --</option>
                    <option value="in">in</option>
                    <option value="out">out</option>
                </select>
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Save
                </button>

                <a href="{{ route('time-tracks.index') }}"
                    class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">
                    Back
                </a>
            </div>

        </form>
    </div>
</x-layouts.auth>
<x-layouts.auth>
