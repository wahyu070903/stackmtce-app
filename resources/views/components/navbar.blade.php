<nav class="flex flex-row items-center justify-between font-inter w-full h-16 px-6 bg-text text-white">
    <div class="flex items-center">
        <img  class="h-[34px] w-auto shrink-0" src="{{ asset('icons/Stackmtce-icon.svg') }}" alt="appicon">
        <div class="hidden lg:flex flex-row items-center font-semibold">
            <a href="#" class="mx-2 py-1">
                Categories
            </a>
            <a href="#" class="mx-2 py-1">
                Something
            </a>
            <a href="#" class="mx-2 py-1">
                I dont know
            </a>
            <a href="#" class="mx-2 py-1">
                Hello world
            </a>
        </div>
    </div>
    <div class="flex flex-row items-center">
        <div class="hidden sm:flex flex-row items-center">
             <a href="#" class="mx-2 py-1 relative group">
                <p class="font-semibold">About</p>
                <span class="absolute left-0 bottom-0 h-[1px] w-full bg-white scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100"></span>
            </a>
            <a href="#" class="mx-2 py-1 relative group">
                <p class="font-semibold">Login</p>
                <span class="absolute left-0 bottom-0 h-[1px] w-full bg-white scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100"></span>
            </a>
        </div>
        <button class="relative group flex flex-row items-center py-2 px-4 bg-secondary text-text font-semibold mx-5">
            <img  class="hidden sm:block z-1 mr-2 w-5.5 h-5.5 transition-transform duration-150 group-hover:translate-x-1" src="{{ asset('icons/Arrow-pixel.svg') }}" alt="signup-icon">
            <p class="z-1">Sign Up</p>
            <span class="absolute top-0 left-0 w-full h-full bg-red-400 scale-x-0 origin-left transition-transform duration-150 z-0 group-hover:scale-x-100"></span>
        </button>
        <button class="sm:hidden">
            <img  class="" src="{{ asset('icons/Burger.svg') }}" alt="BurgerMenu">
        </button>
    </div>
</nav>

<style>


</style>