<!-- "TODO: Update UI elements below" -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Time Track</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-1">
<div class="max-w-2xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6 text-center">Create Time Track</h1>

    <form action="{{ route('time_tracks.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
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
                <option value="IN">IN</option>
                <option value="OUT">OUT</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                Save
            </button>
        </div>
    </form>
</div>
</body>
</html>
