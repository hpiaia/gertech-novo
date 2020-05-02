<div class="swiper-container banners-slide">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <div class="relative">
                    <div class="hidden lg:block absolute w-5/12 right-0 h-full">
                        <img src="{{ Storage::url($banner->image) }}" class="object-cover w-full h-full">
                        <div class="absolute top-0 left-0 bg-white w-32 transform rotate-10 -mt-16 -ml-16" style="height: 125%;"></div>
                    </div>
                    <div class="container h-full py-16 sm:py-20 lg:py-24">
                        <div class="h-full flex items-center lg:w-1/2">
                            <div class="sm:text-center lg:text-left">
                                <h2 class="text-4xl tracking-tight leading-10 font-extrabold sm:text-5xl sm:leading-none md:text-6xl text-primary">
                                    {!! $banner->htmlTitle() !!}
                                </h2>
                                <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    {{ $banner->description }}
                                </p>
                                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                    <div class="rounded-md shadow">
                                        <a href="{{ $banner->url }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-secondary hover:bg-secondary-dark transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                            {{ $banner->button_text }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination banners-slide-pagination"></div>
</div>
