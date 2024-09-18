<div class="relative h-screen">
    <header class="absolute w-full top-0 px-4 py-6 md:px-5 md:py-9 lg:px-10 lg:py-10">
        <div class="max-w-8xl mx-auto">
            <div class="flex items-center justify-between">
                <div class="hidden md:block">
                    <ul class="flex items-center space-x-6 text-white text-sm">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="">
                    <a href="#"><img src="{{ asset('images/logo-white.png') }}" alt="" class="w-24"></a>
                </div>
                <div class="">
                    <div class="relative">
                        <!-- Hamburger Icon -->
                        <div class="text-white hover:text-rose-600">
                            <svg id="menu-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6 cursor-pointer"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </div>

                        <!-- Sidebar -->
                        <div id="sidebar" class="fixed z-10 top-0 right-0 w-full md:w-2/4 h-full bg-white text-gray-800 transition-opacity duration-300 opacity-0 hidden">
                            <!-- Close Icon -->
                            <svg id="close-button" class="fill-white size-6 absolute right-2 md:right-6 top-2 md:top-6 font-medium cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <div class="flex flex-col justify-center h-full">
                                <!-- Menu Content -->
                                <ul class="px-3 md:px-16 lg:px-48  text-black/85 font-montserrat font-semibold text-2xl md:text-3xl lg:text-5xl flex flex-col space-y-3 md:space-y-8 lg:space-y-9">
                                    <li><a href="#" class="hover:text-rose-600">Home</a></li>
                                    <li><a href="#" class="hover:text-rose-600">About</a></li>
                                    <li><a href="#" class="hover:text-rose-600">Services</a></li>
                                    <li><a href="#" class="hover:text-rose-600">Portfolio</a></li>
                                    <li><a href="#" class="hover:text-rose-600">Blog</a></li>
                                    <li><a href="#" class="hover:text-rose-600">Contact</a></li>
                                </ul>   

                                <ul class="px-3 md:px-16 lg:px-48 mt-16 lg:mt-28 text-black/85 flex items-center space-x-6 lg:space-x-8">
                                    <li><a href="#" class="hover:text-rose-600"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="hover:text-rose-600"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#" class="hover:text-rose-600"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#" class="hover:text-rose-600"><i class="fa-brands fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="slider-1" class="h-full">
        <div class="bg-[url('/public/images/homepage1.jpg')] bg-center sm:bg-cover md:bg-left xl:bg-right flex flex-col items-start justify-end md:justify-center h-full">
            <img src="{{ asset('images/homepage-option1.jpg') }}" alt="" class="md:w-1/2 lg:w-1/5 h-full hidden sm:block sm:absolute sm:left-36  md:static">
            <div class="bg-white absolute top-80 sm:top-20 md:top-auto left-8  sm:left-40 lg:left-11 xl:left-52 p-8 lg:p-20 pb-8  lg:pl-24 w-10/12 sm:w-1/2 md:w-7/12 lg:w-3/5 xl:w-1/3 text-center lg:text-left">
                <span class="underline text-red-600 uppercase text-xs lg:text-sm font-semibold tracking-wider font-montserrat ">Good design is honest</span>
                <h1 class="text-neutral-800 text-3xl lg:text-[55px] leading-tight lg:leading-none text-balance pt-4 -tracking-wider pb-16 lg:pb-10  font-montserrat font-medium">We move the <span class="font-bold">digital industry</span></h1>
                <a href="#" class="font-montserrat font-bold uppercase text-xs absolute bottom-8 lg:bottom-0 right-1/4 md:right-1/3 lg:right-0 py-3 px-5 lg:py-5 lg:px-9 bg-black text-white">Project details</a>
            </div>
        </div>
    </div>
    <div id="slider-2" class="h-full">
        <div class="bg-[url('/public/images/homepage2.jpg')] bg-center sm:bg-cover md:bg-left xl:bg-right flex flex-col items-start justify-end md:justify-center h-full">
            <img src="{{ asset('images/homepage-option2.jpg') }}" alt="" class="md:w-1/2 lg:w-1/5 h-full hidden sm:block sm:absolute sm:left-36 md:static">
            <div class="bg-white absolute top-80 sm:top-20 md:top-auto left-8 sm:left-40 lg:left-11 xl:left-52 p-8 lg:p-20 pb-8 lg:pl-24 w-10/12 sm:w-1/2 md:w-7/12 lg:w-3/5 xl:w-1/3 text-center lg:text-left">
                <span class="underline text-orange-600 uppercase text-xs lg:text-sm font-semibold tracking-wider font-montserrat">Good design is honest</span>
                <h1 class="text-neutral-800 text-3xl lg:text-[55px] leading-tight lg:leading-none text-balance pt-4 -tracking-wider pb-16 lg:pb-10  font-montserrat font-medium">We do things <span class="font-bold">differently</span></h1>
                <a href="#" class="font-montserrat font-bold uppercase text-xs absolute bottom-8 lg:bottom-0 right-1/4 md:right-1/3 lg:right-0 py-3 px-5 lg:py-5 lg:px-9 bg-black text-white">Project details</a>
            </div>
        </div>
    </div>
    <div id="slider-3" class="h-full">
        <div class="bg-[url('/public/images/homepage3.jpg')] bg-center sm:bg-cover md:bg-left xl:bg-right flex flex-col items-start justify-end md:justify-center h-full">
            <img src="{{ asset('images/homepage-option3.jpg') }}" alt="" class="md:w-1/2 lg:w-1/5 h-full hidden sm:block sm:absolute sm:left-36 md:static">
            <div class="bg-white absolute top-80 sm:top-20 md:top-auto left-8 sm:left-40 lg:left-11 xl:left-52 p-8 lg:p-20 pb-8 lg:pl-24 w-10/12 sm:w-1/2 md:w-7/12 lg:w-3/5 xl:w-1/3 text-center lg:text-left">
                <span class="underline text-[#C92C0C] uppercase text-xs lg:text-sm font-semibold tracking-wider font-montserrat">Good design is honest</span>
                <h1 class="text-neutral-800 text-3xl lg:text-[55px] leading-tight lg:leading-none text-balance pt-4 -tracking-wider pb-16 lg:pb-10  font-montserrat font-medium">We move the, <span class="font-bold">but significant</span></h1>
                <a href="#" class="font-montserrat font-bold uppercase text-xs absolute bottom-8 lg:bottom-0 right-1/4 md:right-1/3 lg:right-0 py-3 px-5 lg:py-5 lg:px-9 bg-black text-white">Project details</a>
            </div>
        </div>
    </div>
    <div class="relative flex justify-center bg-red-500">
        <div class="absolute bottom-10 sm:bottom-4 lg:bottom-4 flex justify-between w-11">
            <button id="sButton1" onclick="sliderButton1()" class="border-2 bg-black rounded-full w-0.5 p-[3px]"></button>
            <button id="sButton2" onclick="sliderButton2()" class="border-2 bg-black rounded-full w-0.5 p-[3px]"></button>
            <button id="sButton3" onclick="sliderButton3()" class="border-2 bg-black rounded-full w-0.5 p-[3px]"></button>
        </div>
    </div>
</div>