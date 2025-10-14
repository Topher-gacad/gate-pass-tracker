<x-layouts.auth>
  <div class="h-100 overflow-x-auto rounded-box border border-base-200">
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