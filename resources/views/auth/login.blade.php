<x-layouts.base>
  <div class="min-h-screen flex flex-col items-center justify-center bg-[#003366] px-4 py-8">

    <div class="flex flex-col items-center text-center mb-6">
      <img
        src="https://comfacgroup.com/wp-content/themes/scaffolding/images/about/selling-point-1.jpg"
        alt="Company Logo"
        class="w-32 h-24 shadow-md mb-3 rounded-lg object-contain"
      />
      <h1 class="text-[24px] font-poppins leading-tight text-white font-semibold">
        Comfac Global Group
      </h1>
      <div class="border-t-2 border-white w-24 mt-2"></div>
    </div>

    <div class="card w-full max-w-[450px] bg-base-100 shadow-2xl flex flex-col items-center justify-center">
      <div class="card-body flex flex-col justify-center items-center py-8 w-full">

        <form
          method="POST"
          action="{{ route('login.post') }}"
          class="w-full flex flex-col items-center"
        >
          @csrf

          <div class="form-control w-full relative mb-4">
            <label class="label mb-1">
              <span class="label-text font-poppins text-[20px] text-[#003366]">Email</span>
            </label>
            <input
              type="email"
              name="email"
              placeholder="Enter email"
              class="w-full h-[53px] text-[18px] font-poppins pl-4 border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded rounded-xl"
              required
              value="{{ old('email') }}"
            />
          </div>

          <div class="form-control w-full relative mb-4">
            <label class="label mb-1">
              <span class="label-text font-poppins text-[20px] text-[#003366]">Password</span>
            </label>
            <input
              type="password"
              name="password"
              placeholder="Enter password"
              class="w-full h-[53px] text-[18px] font-poppins pl-4 border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded rounded-xl"
              required
            />
          </div>

          @if ($errors->any())
            <div class="text-red-500 text-sm mb-4 w-full text-center">
              {{ $errors->first() }}
            </div>
          @endif

          <div class="form-control w-full mt-6">
            <button
              type="submit"
              class="btn w-full h-[53px] text-black text-[20px] border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded rounded-xl"
              style="background-color: #FFD633;"
            >
              Log in
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
</x-layouts.base>
