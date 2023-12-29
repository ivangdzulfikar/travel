<div class="flex flex-col mb-28 p-4 gap-9 mt-8">
    <div class="flex flex-col gap-8">
        <img class="w-28" src="{{ asset('asset/logo.svg') }}" alt="Travlog">
        <p class="text-sm text-dark opacity-50 leading-tight">Contrary to popular belief, Lorem Ipsum is not simply
            random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
        <div class="flex justify-between w-2/5 md:w-1/6">
            <img class="w-6 h-6" src="{{ asset('asset/logo/facebook.svg') }}" alt="facebook">
            <img class="w-6 h-6" src="{{ asset('asset/logo/twitter.svg') }}" alt="twitter">
            <img class="w-6 h-6" src="{{ asset('asset/logo/instagram.svg') }}" alt="instagram">
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-between gap-1">
        <div x-data="{company : true}" class="md:w-1/3">
            <h2 @click="company = !company" class="md:mb-4 py-4 md:py-0 md:text-xl font-bold text-base flex justify-between">Company
                <span class="md:hidden">
                    <livewire:utils.arrow-down />
                </span>
            </h2>
            <ul x-show="company" class="gap-4 opacity-50 flex flex-col duration-300 ease-in-out">
                <li>About</li>
                <li>Career</li>
                <li>Mobile</li>
            </ul>
        </div>
        <div x-data="{contact : true}" class="md:w-1/3">
            <h2 @click="contact = !contact" class="md:mb-4 py-4 md:py-0 md:text-xl font-bold text-base flex justify-between">Contact
                <span class="md:hidden">
                    <livewire:utils.arrow-down />
                </span>
            </h2>
            <ul x-show="contact" class="gap-4 opacity-50 flex flex-col duration-300 ease-in-out">
                <li>Why Travlog?</li>
                <li>Partner with us</li>
                <li>FAQ's</li>
                <li>Blog</li>
            </ul>
        </div>
        <div x-data="{meetus : true}" class="md:w-1/3">
            <h2 @click="meetus = !meetus" class="md:mb-4 py-4 md:py-0 md:text-xl font-bold text-base flex justify-between">Meet Us
                <span class="md:hidden">
                    <livewire:utils.arrow-down />
                </span>
            </h2>
            <ul x-show="meetus" class="gap-4 opacity-50 flex flex-col duration-300 ease-in-out">
                <li>+62 877 6890 2742</li>
                <li>info$travlog.com</li>
                <li>Jl. Kh Abdullah bin Nuh, Cianjur, Jawa Barat</li>
            </ul>
        </div>
    </div>
</div>