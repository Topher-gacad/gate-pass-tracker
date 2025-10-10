<x-layouts.auth>
  <p class="text-2xl text-blue-600 text-center">Employee Time Management</p>
    <label class="input">
      <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g
          stroke-linejoin="round"
          stroke-linecap="round"
          stroke-width="2.5"
          fill="none"
          stroke="currentColor"
        >
          <circle cx="11" cy="11" r="8"></circle>
          <path d="m21 21-4.3-4.3"></path>
        </g>
      </svg>
    <input type="search" required placeholder="Search" />
  </label> <br> <br>
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
            <div class="flex gap-2">
              <input type="text" class="input" placeholder="Reason" list="Reason" />
                  <datalist id="Reason">
                  <option value="Sick"></option>
                  <option value="Meeting"></option>
                  <option value="Emergency"></option>
              </datalist>
              <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">IN</button>
              <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-yellow-500 hover:border-transparent rounded">OUT</button>
            </div>
          </td>  
        </tr>
      </tbody>
    </table>
  </div>
</x-layouts.auth>

