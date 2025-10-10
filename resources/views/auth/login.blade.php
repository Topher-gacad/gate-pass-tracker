<x-layouts.base>
  <div class="min-h-screen flex items-center justify-center bg-[#003366] px-4">
    <div class="flex flex-col items-center justify-center gap-8">

      <div class="flex flex-col items-center text-white text-center">
        <img
          src="https://comfacgroup.com/wp-content/themes/scaffolding/images/about/selling-point-1.jpg"
          alt="Company Logo"
          class="w-40 h-28 shadow-md mb-3 rounded-lg"ech
        />
        <h1 class="text-[24px] font-poppins leading-tight">Comfac Global Group</h1>
        <div class="border-t-2 border-white w-24 mt-2"></div>
      </div>

      <div class="card w-150 bg-base-100 shadow-1xl">
        <div class="card-body flex flex-col justify-center items-center py-8">
          <form
            method="POST"
            action="{{ route('login') }}"
            class="w-full flex flex-col items-center"
          >
            @csrf

            <div class="form-control w-full relative mb-4">
              <label class="label mb-1">
                <span class="label-text font-poppins text-[20px]">Username</span>
              </label>
              <div class="relative w-full">
                <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                  </svg>
                </span>
                <input
                  type="text"
                  name="username"
                  placeholder="Enter username"
                  class="input input-bordered w-full h-[53px] text-[18px] font-poppins pl-10"
                  style="color: #3399FF;"
                  required
                />
              </div>
            </div>

            <div class="form-control w-full relative">
              <label class="label mb-1">
                <span class="label-text font-poppins text-[20px]">Password</span>
              </label>
              <div class="relative w-full">
                <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 11c1.657 0 3 1.343 3 3v2a3 3 0 01-6 0v-2c0-1.657 1.343-3 3-3z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M17 11V7a5 5 0 00-10 0v4"
                    />
                  </svg>
                </span>
                <input
                  type="password"
                  name="password"
                  placeholder="Enter password"
                  class="input input-bordered w-full h-[53px] text-[18px] font-poppins pl-10"
                  style="color: #3399FF;"
                  required
                />
              </div>
            </div>

            <div class="form-control w-full mt-6">
              <button
                type="submit"
                class="btn w-full h-[53px] text-white text-[24px] font-medium border-none hover:brightness-110 transition-all duration-200"
                style="background-color: #FFD633;"
              >
                Log in
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layouts.base>