<x-layouts.base>
        <div class="navbar bg-base-100 shadow-sm hidden lg:flex">
            <div class="flex-1 px-12 flex items-center">
                <x-logo />
                <div>
                    <div class="text-3xl text-blue-950 font-bold">Logify</div>
                    <div class="text-md text-blue-400">Comfac Global Group</div>
                </div>
            </div>

            <div class="dropdown dropdown-end mr-8">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="size-10 rounded-full">
                        <img
                            alt="User"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content font-bold text-lg bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="navbar bg-base-100 shadow-sm flex lg:hidden">
        <div class="flex-1 px-4 flex items-center gap-3">
                <x-logo />
                <div class="flex flex-col leading-tight">
                    <div class="text-lg font-bold text-blue-950">Logify</div>
                    <div class="text-xs text-blue-400">Comfac Global Group</div>
                </div>
            </div>
            <div class="dropdown dropdown-end mr-4">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 h-10 rounded-full">
                        <img
                            alt="User"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                            class="object-cover w-full h-full"
                        />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content font-bold text-lg bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a>Logout</a></li>
                </ul>
            </div>    
        </div>
    
        <div class="relative bg-blue-950 shadow-lg px-4 py-1.5 max-w-7xl mx-auto hidden lg:flex items-center justify-between">
            <div class="px-12 text-xl font-bold tracking-tight text-white">
                Dashboard
            </div>
        </div>

        <div class="relative bg-blue-950 shadow-lg px-4 py-1 max-w-7xl mx-auto flex lg:hidden items-center justify-between">
            <div class="px-5 text-xl font-bold tracking-tight text-white">
                Dashboard
            </div>
        </div>

        <main>
            <div class="w-11/12 max-w-screen-lg mx-auto">
                {{$slot}}
            </div>
        </main>
    </x-layouts.base>
