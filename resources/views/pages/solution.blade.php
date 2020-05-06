@extends('layouts.app')

@section('title', __('Soluções'))

@section('content')
    <section class="container mt-12">
        <div class="md:flex items-center">
            <div>
                <a href="{{ route('solutions') }}" class="uppercase font-bold text-secondary">
                    <i class="fas fa-fw fa-arrow-left"></i>
                    @lang('Soluções')
                </a>
                <h2 class="text-4xl text-primary font-bold">
                    {{ $solution->title }}
                </h2>
            </div>
            <div class="ml-auto mt-4 md:mt-0">
                <a href="{{ $solution->contactPath() }}" class="block text-center md:inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded-md text-white bg-secondary hover:bg-secondary-dark">
                    <i class="fas fa-fw fa-star text-white"></i>
                    <span class="ml-2">
                        @lang('Solicitar orçamento')
                    </span>
                </a>
            </div>
        </div>

        <div class="md:flex mt-8">
            <div class="md:w-3/5 pr-12">
                <h3 class="text-3xl text-primary font-medium">
                    @lang('Descrição')
                </h3>

                <div class="mt-4">
                    {!! $solution->description !!}
                </div>
            </div>

            @if ($solution->hasMedia('images'))
                <div class="md:w-2/5 mt-8 md:mt-0">
                    <div class="swiper-container gallery-top mt-2">
                        <div class="swiper-wrapper">
                            @foreach ($solution->getMedia('images') as $media)
                                <div class="swiper-slide">
                                    <a href="{{ $media->getFullUrl() }}" class="solution-gallery">
                                        <img src="{{ $media->getFullUrl() }}" class="w-full h-64 object-cover">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs mt-4">
                        <div class="swiper-wrapper">
                            @foreach ($solution->getMedia('images') as $media)
                                <div class="swiper-slide">
                                    <img src="{{ $media->getFullUrl() }}" class="w-full h-24 object-cover">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>

        @if ($solution->specifications)
            <div class="mt-12">
                <h3 class="text-3xl text-primary font-medium">
                    @lang('Especificações')
                </h3>

                <table class="w-full mt-4">
                    @foreach (json_decode($solution->specifications, true) as $key => $value)
                        <tr>
                            <td class="border-b px-2 py-2">{{ $key }}</td>
                            <td class="border-b px-2 py-2">{{ $value }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif
    </section>
@endsection
