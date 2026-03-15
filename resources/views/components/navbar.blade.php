<nav class="flex flex-row items-center justify-between font-inter w-full h-16 px-6 bg-text text-white">
    <div class="flex items-center">
        <img  class="h-8.5 w-auto shrink-0" src="{{ asset('icons/Stackmtce-icon.svg') }}" alt="appicon">
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
                <span class="absolute left-0 bottom-0 h-px w-full bg-white scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100"></span>
            </a>
            <a href="#" class="mx-2 py-1 relative group">
                <p class="font-semibold">Login</p>
                <span class="absolute left-0 bottom-0 h-px w-full bg-white scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100"></span>
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
        <div class="__nav_button flex flex-col gap-y-2 border-r-2 border-black pr-4">
            <a class="group active relative py-4" data-target="__electronics">
                <span class="absolute top-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
                <p>Electronics</p>
                <span class="absolute bottom-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
            </a>
            <a class="group relative py-4" data-target="__mechanical">
                <span class="absolute top-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
                <p>Mechanical</p>
                <span class="absolute bottom-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
            </a>
            <a class="group relative py-4" data-target="__informatics">
                <span class="absolute top-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
                <p>Informatics</p>
                <span class="absolute bottom-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
            </a>
            <a class="group relative py-4" data-target="__contents">
                <span class="absolute top-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
                <p>Contents</p>
                <span class="absolute bottom-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
            </a>
            <a class="group relative py-4" data-target="__platform">
                <span class="absolute top-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
                <p>Platform</p>
                <span class="absolute bottom-0 left-0 h-0.5 w-full bg-text scale-x-0 origin-left transition-transform duration-300 group-[.active]:scale-x-100"></span>
            </a>
        </div>
        <div class="flex flex-col m __nav_menus">
            <div class="__electronics flex flex-col gap-y-4">
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
            <div class="__mechanical hidden flex-col gap-y-4">
                <a>Other</a>
                <a>Basic Mechanical</a>
                <a>Design</a>
                <a>Manufacture</a>
                <a>Tips</a>
                <a>Projects</a>
            </div>
            <div class="__informatics hidden flex-col gap-y-4">
                <a>Other</a>
                <a>Computer</a>
                <a>C++</a>
                <a>Python</a>
                <a>Javascript</a>
                <a>Web Development</a>
                <a>App Development</a>
                <a>Databases</a>
                <a>Algorithms</a>
                <a>DataStructures</a>
                <a>Tips</a>
                <a>Projects</a>
            </div>
            <div class="__platform hidden flex-col gap-y-4">
                <a>Blog</a>
                <a>Toolbox</a>
                <a>Archives</a>
                <a>Resources</a>
            </div>
            <div class="__contents hidden flex-col gap-y-4">
                <a>Robotics</a>
                <a>Electronics</a>
                <a>Automation</a>
                <a>Mechanical</a>
                <a>Control Systems</a>
                <a>Do it Yourself</a>
            </div>
        </div>
    </div>
</div>

<style> 

</style>