<x-layout>
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6 text-center">Create Time Track</h1>

        <form action="{{ route('time_tracks.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">User ID</label>
                <input type="text" name="User_id" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Reason</label>
                <textarea name="Reason" class="w-full border rounded p-2" required></textarea>
            </div>

            <div>
                <label class="block font-medium">Location</label>
                <input type="text" name="Location" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Type</label>
                <select name="Type" class="w-full border rounded p-2" required>
                    <option value="IN">IN</option>
                    <option value="OUT">OUT</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</x-layout>
