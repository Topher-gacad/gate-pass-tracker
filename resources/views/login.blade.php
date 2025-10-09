<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@4.4.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      body {
        font-family: "Poppins", regular;
      }
    </style>
  </head>

  <body
    class="flex flex-col justify-center items-center min-h-screen"
    style="background-color: #003366;"
  >
    <!-- Header Section -->
    <div class="flex flex-col items-center text-white mb-8">
      <img
        src="https://comfacgroup.com/wp-content/themes/scaffolding/images/about/selling-point-1.jpg"
        alt="Company Logo"
        class="w-15 h-20 object-contain rounded-box border-1 border-white shadow-md mb-3"
      />
      <h1 class="text-[28px] font-semibold leading-tight">Comfac Global Group</h1>
      <div class="border-t-2 border-white w-24 mt-2"></div>
    </div>

    <div
      class="card w-[700px] h-[350px] bg-base-100 shadow-2xl flex justify-center"
    >
      <div class="card-body flex flex-col justify-center items-center">
        <form class="w-full flex flex-col items-center">
          <div class="form-control">
            <label class="label">
              <span class="label-text font-medium text-[20px]">Username</span>
            </label>
            <input
              type="text"
              placeholder="Enter username"
              class="input input-bordered w-[560px] h-[53px] text-[18px] font-light"
              required
            />
          </div>

          <div class="form-control mt-4">
            <label class="label">
              <span class="label-text font-medium text-[20px]">Password</span>
            </label>
            <input
              type="password"
              placeholder="Enter password"
              class="input input-bordered w-[560px] h-[53px] text-[18px] font-light"
              required
            />
          </div>

          <div class="form-control mt-6">
            <button
              class="btn w-[560px] h-[53px] text-black text-[24px] font-medium"
              style="background-color: #FFD633;"
            >
              Log in
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>