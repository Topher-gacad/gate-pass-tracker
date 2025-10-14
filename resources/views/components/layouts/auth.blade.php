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
</div>


        <header class="relative bg-blue-950 shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-1.5 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold tracking-tight text-white">Dashboard</h1>
            </div>
        </header>
        
        <main>
            {{$slot}}
        </main>
    </div>
</x-layouts.base>
