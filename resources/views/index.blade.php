@extends('layout.app')

@section('content')

<section class="py-14 md:py-20  lg:py-28 px-2.5 sm:px-20 md:px-10 lg:px-0"> 
    <div class="lg:max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2">  
            <div class="font-montserrat md:pr-60 lg:pr-20">
                <span class="text-rose-600 text-sm font-medium">Handcrafted Templates</span>
                <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-[40px] lg:leading-[46px] text-balance font-semibold py-3 after:block after:w-9 after:h-[3px] after:bg-rose-600 after:mt-4 lg:after:mt-6">Perfect powerful theme for creatives designer people.</h2>
            </div>
            <div class="lg:pl-6">
                <p class="pt-6 lg:pt-12 text-lg">Beautiful and easy to use UI, professional animations and drag and drop feature with unique digital experiences</p>
                <p class="pt-6 pb-8 lg:pb-10 text-gray-500 leading-7">With years of experience in the website design and development industry ThemeZaa pride ourselves on creating unique, creative and quality designs that are developed upon the latest modern coding and developing techniques, which are then built using the most up to date, structured coding framework so that your development team can take it to the next level with ease.</p>
                <ul class="flex flex-col sm:flex-row space-y-2 sm:space-x-16 items-start sm:items-center  uppercase font-medium text-sm">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-book-bookmark text-2xl"></i> Development</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-brush text-2xl"></i> Experiences</li>
                    <li class="flex items-center gap-3"><i class="fa-regular fa-image text-2xl"></i> Framework</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        <div class="group relative overflow-hidden">
            <a href="#">
                <img class="w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-110 group-hover:blur-sm" src="{{ asset('images/portfolio-1.jpg') }}">
                <div class="bg-rose-600 text-white absolute inset-0 px-16 py-10 flex flex-col justify-end invisible opacity-0 before:block before:bg-black before:w-2/5 before:opacity-50 before:h-px before:mb-5 uppercase transition-all ease-in-out duration-300 group-hover:opacity-90 group-hover:visible group-hover:scale-110 group-hover:-translate-y-4 translate-y-4 ">
                    <h3 class="text-sm font-semibold tracking-wider">Black and White</h3>
                    <p class="text-[11px] leading-5">Branding and Brochure</p>
                </div>
            </a>
        </div>
        <div class="row-span-2 group relative overflow-hidden">
            <a href="#">
                <img class="w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-110 group-hover:blur-sm" src="{{ asset('images/portfolio-2.jpg') }}">
                <div class="bg-rose-600 text-white absolute inset-0 px-16 py-10 flex flex-col justify-end invisible opacity-0 before:block before:bg-black before:w-2/5 before:opacity-50 before:h-px before:mb-5 uppercase transition-all ease-in-out duration-300 group-hover:opacity-90 group-hover:visible group-hover:scale-110 group-hover:-translate-y-4 translate-y-4 ">
                    <h3 class="text-sm font-semibold tracking-wider">Banana Design</h3>
                    <p class="text-[11px] leading-5">Logo and Identity</p>
                </div>
            </a>
        </div>
        <div class="group relative overflow-hidden">
            <a href="#">
                <img class="w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-110 group-hover:blur-sm" src="{{ asset('images/portfolio-3.jpg') }}">
                <div class="bg-rose-600 text-white absolute inset-0 px-16 py-10 flex flex-col justify-end invisible opacity-0 before:block before:bg-black before:w-2/5 before:opacity-50 before:h-px before:mb-5 uppercase transition-all ease-in-out duration-300 group-hover:opacity-90 group-hover:visible group-hover:scale-110 group-hover:-translate-y-4 translate-y-4 ">
                    <h3 class="text-sm font-semibold tracking-wider">Design Blast</h3>
                    <p class="text-[11px] leading-5">Web and Photography</p>
                </div>
            </a>
        </div>
        <div class="group relative overflow-hidden">
            <img class="w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-110 group-hover:blur-sm" src="{{ asset('images/portfolio-4.jpg') }}">
            <div class="bg-rose-600 text-white absolute inset-0 px-16 py-10 flex flex-col justify-end invisible opacity-0 before:block before:bg-black before:w-2/5 before:opacity-50 before:h-px before:mb-5 uppercase transition-all ease-in-out duration-300 group-hover:opacity-90 group-hover:visible group-hover:scale-110 group-hover:-translate-y-4 translate-y-4 ">
                <h3 class="text-sm font-semibold tracking-wider">Kaya Skin Care</h3>
                <p class="text-[11px] leading-5">Logo and Identity</p>
            </div>
        </div>
        <div class="group relative overflow-hidden">
            <img class="w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-110 group-hover:blur-sm" src="{{ asset('images/portfolio-5.jpg') }}">
            <div class="bg-rose-600 text-white absolute inset-0 px-16 py-10 flex flex-col justify-end invisible opacity-0 before:block before:bg-black before:w-2/5 before:opacity-50 before:h-px before:mb-5 uppercase transition-all ease-in-out duration-300 group-hover:opacity-90 group-hover:visible group-hover:scale-110 group-hover:-translate-y-4 translate-y-4 ">
                <h3 class="text-sm font-semibold tracking-wider">Herbal Beauty Salon</h3>
                <p class="text-[11px] leading-5">Branding and Brochure</p>
            </div>
        </div>
        <div class="group relative overflow-hidden">
            <img class="w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-110 group-hover:blur-sm" src="{{ asset('images/portfolio-6.jpg') }}">
            <div class="bg-rose-600 text-white absolute inset-0 px-16 py-10 flex flex-col justify-end invisible opacity-0 before:block before:bg-black before:w-2/5 before:opacity-50 before:h-px before:mb-5 uppercase transition-all ease-in-out duration-300 group-hover:opacity-90 group-hover:visible group-hover:scale-110 group-hover:-translate-y-4 translate-y-4 ">
                <h3 class="text-sm font-semibold tracking-wider">Pixflow Studio</h3>
                <p class="text-[11px] leading-5">Branding and Brochure</p>
            </div>
        </div>
        <div class="group relative overflow-hidden">
            <img class="w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-110 group-hover:blur-sm" src="{{ asset('images/portfolio-7.jpg') }}">
            <div class="bg-rose-600 text-white absolute inset-0 px-16 py-10 flex flex-col justify-end invisible opacity-0 before:block before:bg-black before:w-2/5 before:opacity-50 before:h-px before:mb-5 uppercase transition-all ease-in-out duration-300 group-hover:opacity-90 group-hover:visible group-hover:scale-110 group-hover:-translate-y-4 translate-y-4 ">
                <h3 class="text-sm font-semibold tracking-wider">Large bite</h3>
                <p class="text-[11px] leading-5">Branding and Identity</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 md:py-28 lg:py-40 px-2.5 sm:px-20 md:px-10 lg:px-0">
    <div class="lg:max-w-6xl mx-auto">
        <div class="md:w-11/12 lg:w-8/12 pb-10 md:pb-14 lg:pb-24">   
            <h2 class="text-xl md:text-2xl lg:text-3xl">We always stay on the cutting edge of digital, so that our clients maintain their competitive advantage online. We have our own developers and technical producers.</h2>
        </div>
       
        <div class="flex flex-col gap-16">
            <div class="flex flex-col md:flex-row justify-between gap-4 md:gap-12 lg:gap-0">
                <div class="text-lg md:w-1/6 lg:w-1/6">
                    <span>Design</span>
                </div>
                <div class="md:w-3/4 lg:w-4/6 lg:pr-36">
                    <p class="text-gray-500 leading-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been dummy text since.</p>
                </div>
                <div class="text-xs md:w-2/5 lg:w-1/6">
                    <a href="#" class="before:inline-block before:bg-gray-300 before:w-20 before:h-px flex items-center gap-2 text-gray-500 hover:text-rose-600 font-medium uppercase">Explore more</a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between gap-4 md:gap-12 lg:gap-0">
                <div class="text-lg md:w-1/6 lg:w-1/6">
                    <span>Creativity</span>
                </div>
                <div class="md:w-3/4 lg:w-4/6 lg:pr-36">
                    <p class="text-gray-500 leading-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been dummy text since.</p>
                </div>
                <div class="text-xs md:w-2/5 lg:w-1/6">
                    <a href="#" class="before:inline-block before:bg-gray-300 before:w-20 before:h-px flex items-center gap-2 text-gray-500 hover:text-rose-600 font-medium uppercase">Explore more</a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between gap-4 md:gap-12 lg:gap-0">
                <div class="text-lg md:w-1/6 lg:w-1/6">
                    <span>Marketing</span>
                </div>
                <div class="md:w-3/4 lg:w-4/6 lg:pr-36">
                    <p class="text-gray-500 leading-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been dummy text since.</p>
                </div>
                <div class="text-xs md:w-2/5 lg:w-1/6">
                    <a href="#" class="before:inline-block before:bg-gray-300 before:w-20 before:h-px flex items-center gap-2 text-gray-500 hover:text-rose-600 font-medium uppercase">Explore more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 md:py-28 lg:py-40 bg-black/85 px-2.5 sm:px-20 md:px-10 lg:px-0">
    <div class="lg:max-w-6xl mx-auto">
        <span class="text-stone-400 uppercase text-sm font-medium">What we'll do</span>
        <h2 class="text-white text-xl lg:text-3xl pt-1">We are the australia award winning creative agency</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2  lg:grid-cols-3 gap-10 lg:gap-24 pt-10 lg:pt-24">
            <div class="md:pr-10 lg:pr-14">
                <i class="fa-solid fa-desktop text-stone-400 text-4xl"></i>
                <h3 class="text-white pt-4 pb-3 font-semibold font-montserrat text-sm">Web Development</h3>
                <p class="text-stone-400 text-sm leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
            <div class="md:pr-10 lg:pr-14">
                <i class="fa-solid fa-pen-ruler text-stone-400 text-4xl"></i>
                <h3 class="text-white pt-4 pb-3 font-semibold font-montserrat text-sm">Logo & Identity</h3>
                <p class="text-stone-400 text-sm leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
            <div class="md:pr-10 lg:pr-14">
                <i class="fa-solid fa-parachute-box text-stone-400 text-4xl"></i>
                <h3 class="text-white pt-4 pb-3 font-semibold font-montserrat text-sm">Graphics Design</h3>
                <p class="text-stone-400 text-sm leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
            <div class="md:pr-10 lg:pr-14">
                <i class="fa-solid fa-bullseye text-stone-400 text-4xl"></i>
                <h3 class="text-white pt-4 pb-3 font-semibold font-montserrat text-sm">App Development</h3>
                <p class="text-stone-400 text-sm leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
            <div class="md:pr-10 lg:pr-14">
                <i class="fa-solid fa-scissors text-stone-400 text-4xl"></i>
                <h3 class="text-white pt-4 pb-3 font-semibold font-montserrat text-sm">Social Marketing</h3>
                <p class="text-stone-400 text-sm leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
            <div class="md:pr-10 lg:pr-14">
                <i class="fa-solid fa-laptop text-stone-400 text-4xl"></i>
                <h3 class="text-white pt-4 pb-3 font-semibold font-montserrat text-sm">Content Creation</h3>
                <p class="text-stone-400 text-sm leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-14">
    <div class="lg:max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <div class="bg-[url('/public/images/counter-image.png')] bg-cover bg-center flex flex-col items-center justify-center p-20">
                <div class="counter text-3xl pb-2 text-rose-600" data-target="13">0</div>
                <img src="{{ asset('images/counter-logo1.png') }}" alt="">
            </div>
            <div class="bg-[url('/public/images/counter-image.png')] bg-cover bg-center flex flex-col items-center justify-center p-20">
                <div class="counter text-3xl pb-2 text-rose-600" data-target="15">0</div>
                <img src="{{ asset('images/counter-logo2.png') }}" alt="">
            </div>
            <div class="bg-[url('/public/images/counter-image.png')] bg-cover bg-center flex flex-col items-center justify-center p-20">
                <div class="counter text-3xl pb-2 text-rose-600" data-target="22">0</div>
                <img src="{{ asset('images/counter-logo3.png') }}" alt="">
            </div>
            <div class="bg-[url('/public/images/counter-image.png')] bg-cover bg-center flex flex-col items-center justify-center p-20">
                <div class="counter text-3xl pb-2 text-rose-600" data-target="17">0</div>
                <img src="{{ asset('images/counter-logo4.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection