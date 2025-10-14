<x-layouts.auth>
  <div class="h-115 overflow-x-auto rounded-box border border-blue-950 px-9 py-9 mt-9">
    <p class="text-2xl text-blue-600 text-center">Employee Time Management</p>
    <br>

    @if (session('success'))
      <div class="alert alert-success text-green-700 font-semibold mb-4">
        {{ session('success') }}
      </div>
    @endif

    @if (session('error'))
      <div class="alert alert-error text-red-700 font-semibold mb-4">
        {{ session('error') }}
      </div>
    @endif


    @if ($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <strong>There were some problems with your input:</strong>
        <ul class="list-disc pl-6">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif


    <div class="flex justify-col gap-4 mb-8">
      <label class="input">
        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.3-4.3"></path>
          </g>
        </svg>
        <input type="search" required placeholder="Search" />
      </label>


      <details class="dropdown-bottom max-w-xs">
        <summary class="btn input w-full justify-start normal-case">Companies</summary>
        <ul class="p-2 shadow menu dropdown-content z-[50] rounded-box w-52 absolute bg-white">
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" checked
                class="checkbox checkbox-sm" /><span class="label-text">Comfac</span></label></li>
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" class="checkbox checkbox-sm" /><span
                class="label-text">ESCO</span></label></li>
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" class="checkbox checkbox-sm" /><span
                class="label-text">Cornelsteel</span></label></li>
        </ul>
      </details>


      <details class="dropdown-bottom max-w-xs">
        <summary class="btn input w-full justify-start normal-case">Department</summary>
        <ul class="p-2 shadow menu dropdown-content z-[50] rounded-box w-52 absolute bg-white">
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" checked
                class="checkbox checkbox-sm" /><span class="label-text">Admin</span></label></li>
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" class="checkbox checkbox-sm" /><span
                class="label-text">HR</span></label></li>
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" class="checkbox checkbox-sm" /><span
                class="label-text">IT</span></label></li>
        </ul>
      </details>

      <details class="dropdown-bottom max-w-xs">
        <summary class="btn input w-full justify-start normal-case">Role</summary>
        <ul class="p-2 shadow menu dropdown-content z-[50] rounded-box w-52 absolute bg-white">
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" checked
                class="checkbox checkbox-sm" /><span class="label-text">Supervisor</span></label></li>
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" class="checkbox checkbox-sm" /><span
                class="label-text">Employee</span></label></li>
          <li><label class="label cursor-pointer gap-2"><input type="checkbox" class="checkbox checkbox-sm" /><span
                class="label-text">Manager</span></label></li>
        </ul>
      </details>
  <div class="w-full mx-auto max-w-xl mt-5">
    <div class="flex justify-center text-3xl font-bold border-b-2 border-gray-300 mb-4 pb-2">
      <h1>All Time Tracks</h1>
    </div>

    <div class="h-50 overflow-x-auto rounded-box border border-blue-950">
      <table class="table table-pin-rows bg-base-200">
        <thead>
          <tr>
            <th>Name</th>
            <th>Company</th>
            <th>Department</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Cy Ganderton</td>
            <td>Comfac</td>
            <td>Department</td>
            <td>Supervisor</td>
            <td>

              
              <form method="POST" action="{{ route('time-tracks.store') }}" class="flex gap-2 items-center">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id ?? 1 }}" />

                
                <input type="text" name="reason" class="input input-bordered reason-input" placeholder="Reason"
                  list="ReasonList" required />
                <datalist id="ReasonList">
                  <option value="Sick"></option>
                  <option value="Meeting"></option>
                  <option value="Emergency"></option>
                  <option value="Official Business"></option>
                </datalist>

                
                <button type="submit" name="type" value="in"
                  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">
                  IN
                </button>

                
                <button type="submit" name="type" value="out"
                  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">
                  OUT
                </button>
              </form>

            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="mt-5 flex justify-end w-full">
      <button
        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">
        Next
      </button>
    </div>
  </div>
</x-layouts.auth>