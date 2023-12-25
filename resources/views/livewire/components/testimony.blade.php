<div class=" md:relative bg-center " style="background-image: url({{ asset('asset/img/layer.png') }})">
    <div class="flex flex-col items-center gap-16 text-center px-4 md:w-4/5 md:mx-auto">
        <div class="font-bold">
            <h2 class="uppercase text-base lg:text-2xl text-secondary tracking-widest mb-4">testimonials</h2>
            <p class="text-3xl lg:text-5xl">Trust our clients</p>
        </div>

        <div class="flex">
            <div class="flex flex-col justify-center gap-9 w-4/5 mx-auto">

                <img src="{{ asset('asset/img/profil1.png') }}" alt="profile1" class="rounded-full w-24 h-24 mx-auto">
    
                <div class="flex flex-col justify-center items-center gap-9">
    
                    <p class="text-orange font-bold text-xl">Mark Smith <span class="text-dark opacity-80">/ Travel
                            Enthusiast</span></p>
                    <img src="{{ asset('asset/icon/5star.svg') }}" alt="star">
    
                </div>
    
                <p class="font-normal text-dark opacity-90">Contrary to popular belief, Lorem Ipsum is not simply random
                    text.
                    It has roots in a piece of classical Latin literature from 45 BC.</p>
    
            </div>
            
        </div>

        <div class="flex gap-3 justify-center items-center">
            <div class="h-4 w-4 bg-gray-300 rounded-full"></div>
            <div class="h-4 w-4 bg-secondary rounded-full"></div>
            <div class="h-4 w-4 bg-gray-300 rounded-full"></div>
        </div>
    </div>

    <div class="flex justify-between w-full md:absolute md:top-1/2 px-4">
        <livewire:utils.arrow-left />
        <livewire:utils.arrow-right />

    </div>
</div>