<nav class="flex flex-row items-center justify-between font-inter w-full h-16 px-6 bg-text text-white">
    <div class="flex items-center">
        <img  class="h-[34px] w-auto shrink-0" src="{{ asset('icons/Stackmtce-icon.svg') }}" alt="appicon">
        <div class="hidden lg:flex flex-row items-center font-semibold ml-6">
            <a href="#" class="mx-4 py-1">
                Electronics
            </a>
            <a href="#" class="mx-4 py-1">
                Mechanical
            </a>
            <a href="#" class="mx-4 py-1">
                Informatics
            </a>
            <a href="#" class="mx-4 py-1">
                Contents
            </a>
            <a href="#" class="mx-4 py-1">
                Platform
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
        <button id="burger-btn" class="sm:hidden">
            <img  class="" src="{{ asset('icons/Burger.svg') }}" alt="BurgerMenu">
        </button>
    </div>
</nav>

<div id="burger-menu" class="hidden absolute top-0 left-0 w-screen h-screen bg-white z-10">
    <div class="flex flex-row items-start justify-between px-6 mt-6">
        <div class="flex flex-col text-xl font-semibold gap-y-4">
            <a>About</a>
            <a>Login</a>
            <a>Sign Up</a>
        </div>
        <button id="burger-close" class="bg-background rounded-full px-2 py-2">
            <img class="w-5 h-5" src="{{ asset('icons/X-pixel.svg') }}" alt="close-btn">
        </button>
    </div>
    <div class="flex flex-row items-start px-6 mt-12 gap-x-8">
        <div class="__nav_button flex flex-col gap-y-4">
            <a>
                Electronics
            </a>
            <a>
                Mechanical
            </a>
            <a>
                Informatics
            </a>
            <a>
                Platform
            </a>
            <a>
                Contents
            </a>
        </div>
        <div class="flex flex-col m __nav_menus">
            <div class="flex flex-col gap-y-4">
                <a>Other</a>
                <a>Basic Electronics</a>
                <a>Sensors</a>
                <a>Actuator</a>
                <a>Micro Controller</a>
                <a>ICs</a>
                <a>Circuits</a>
                <a>Tips</a>
                <a>Projects</a>
            </div>
            <div class="hidden flex flex-col gap-y-4">
                <a>Other</a>
                <a>Basic Mechanical</a>
                <a>Design</a>
                <a>Manufacture</a>
                <a>Tips</a>
                <a>Projects</a>
            </div>
        </div>
    </div>
</div>

<style>


</style>