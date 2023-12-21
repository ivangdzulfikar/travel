<div x-data="{ open : true }" class="container mx-auto p-4 fixed top-0 bg-white">

    <nav class="flex justify-between items-center bg-white">

        <img class="order-1 md:order-2" src="{{ asset('asset/logo.svg') }}" alt="Travlog">
        <img class="order-2 md:order-1 lg:hidden" @click="open = !open" src="{{ asset('asset/menu.svg') }}" alt="Menu">

        <ul class="lg:flex order-2 hidden justify-center gap-6 font-bold text-dark">
            <li>
                <a class="" href="/">Home</a>
            </li>
            <li>
                <a class="opacity-50" href="/">Discover</a>
            </li>
            <li>
                <a class="opacity-50" href="/">Special Deals</a>
            </li>
            <li>
                <a class="opacity-50" href="/">Contact</a>
            </li>
        </ul>

        <div class="md:flex hidden order-3 gap-1 justify-center px-3 w-56">
            <button class="rounded-full shadow hover:bg-slate-100 text-dark py-4 font-bold text-sm grow">Log in</button>
            <button class="bg-primary hover:opacity-80 rounded-full py-4 text-white font-bold text-sm grow">Sign
                Up</button>
        </div>
    </nav>

    <div x-show="open" x-transition x-data="{openLogin : false}"
        class="lg:hidden fixed flex right-0 justify-evenly gap-1 bottom-0 left-0 py-4 bg-white z-50">
        <div
            class="flex flex-col justify-center hover:cursor-pointer items-center text-xs gap-1 text-center text-primary font-bold hover:text-primary hover:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" data-slot="icon" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>

            Home
        </div>
        <div
            class="flex flex-col justify-center hover:cursor-pointer items-center text-xs gap-1 opacity-50 text-center hover:text-primary hover:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" data-slot="icon" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            Discover
        </div>
        <div
            class="flex flex-col justify-center hover:cursor-pointer items-center text-xs gap-1 opacity-50 text-center hover:text-primary hover:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" data-slot="icon" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            Special Deals
        </div>
        <div
            class="flex flex-col justify-center hover:cursor-pointer items-center text-xs gap-1 opacity-50 text-center hover:text-primary hover:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" data-slot="icon" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
            </svg>
            Contact
        </div>
        <div @click="openLogin = !openLogin"
            class="flex flex-col md:hidden justify-center hover:cursor-pointer items-center text-xs gap-1 opacity-50 text-center hover:text-primary hover:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" data-slot="icon" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            More
        </div>
        <div x-show="openLogin" x-transition class="bg-white flex gap-1 fixed justify-center p-3 bottom-16 right-0 left-0">
            <button class="rounded-full shadow hover:bg-slate-100 text-dark py-4 font-bold text-sm grow">Log in</button>
            <button class="bg-primary hover:opacity-80 rounded-full py-4 text-white font-bold text-sm grow">Sign
                Up</button>
        </div>
    </div>



</div>