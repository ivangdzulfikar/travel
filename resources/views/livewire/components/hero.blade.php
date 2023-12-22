<div class="grid mx-auto grid-cols-12 justify-center items-center px-4">
    <div class="col-span-12 lg:col-span-8 lg:order-2">
        <img class="w-full lg:h-4/5 lg:w-4/5 lg:mx-auto" src="{{ asset('asset/hero.png') }}" alt="hero">
    </div>
    <div class="col-span-12 lg:col-span-4 lg:pl-3 lg:order-1 grid gap-8 lg:gap-12 justify-center items-center">

        <button class="flex items-center mx-auto w-56 lg:mx-0 gap-4 px-8 py-4 shadow-md bg-white rounded-full text-sm font-bold hover:bg-slate-200 text-secondary">
            Explore the world
            <img src="{{ asset('asset/icon/work.svg') }}" alt="work">
        </button>

        <div class="flex flex-col gap-4">
            <h1 class="font-bold text-4xl md:text-6xl lg:w-3/4 text-dark text-center lg:text-start">Travel <span class="text-secondary">top destination</span> of the world</h1>
    
            <p class="text-center mx-auto lg:mx-0 text-sm md:text-lg md:w-3/5 lg:w-4/5 lg:text-sm lg:text-start opacity-50 text-dark">We always make our customer happy by providing
                as many choices as possible </p>
        </div>
        <div class="flex flex-col gap-4 md:flex-row w-full lg:w-96 justify-center lg:justify-start lg:mx-0 text-sm">
            <button class="bg-primary hover:opacity-80 rounded-full hover:shadow-lg duration-150 py-4 text-white px-8 font-bold text-sm ">Get Strated</button>
            <button class="rounded-full shadow hover:bg-slate-100 hover:shadow-lg duration-150 text-dark px-8 py-4 font-bold text-sm flex items-center justify-center gap-2 ">
                <img src="{{ asset('asset/icon/play.svg') }}" alt="watch">
                Watch Demo
            </button>
        </div>
    </div>

</div>