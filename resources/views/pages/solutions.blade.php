@extends('layouts.app')

@section('title', __('Soluções'))

@section('content')
    <section class="container mt-12">
        @foreach ($categories as $category)
            <div class="mt-8">
                <h2 class="text-4xl text-primary font-bold">
                    {{ $category->title }}
                </h2>

                <p class="text-gray-600">{{ $category->description }}</p>

                <div class="flex flex-wrap">
                    @foreach ($category->solutions as $solution)
                        <div class="w-full lg:w-1/2 mt-8">
                            <div class="md:flex shadow-md hover:shadow-lg lg:mx-2">
                                <div class="md:w-1/4">
                                    <a href="{{ route('solutions.show', $solution) }}">
                                        <img src="{{ Storage::url($solution->cover_image) }}" alt="" class="w-full h-32 md:h-48 object-cover">
                                    </a>
                                </div>
                                <div class="md:w-3/4 px-4 py-4 md:py-2 flex flex-col">
                                    <h3 class="text-lg font-medium">
                                        <a href="{{ route('solutions.show', $solution) }}">
                                            {{ $solution->title }}
                                        </a>
                                    </h3>
                                    <p class="text-sm mt-4">
                                        {{ $solution->short_description }}
                                    </p>
                                    <div class="mt-4 md:mt-auto flex">
                                        <a href="{{ route('solutions.show', $solution) }}" class="text-sm inline-flex items-center leading-5 font-medium rounded-md text-primary">
                                            <i class="fas fa-fw fa-info-circle mr-2"></i>
                                            @lang('Mais detalhes')
                                        </a>

                                        <a href="{{ $solution->contactPath() }}" class="text-sm inline-flex items-center leading-5 font-medium rounded-md text-secondary ml-auto  ">
                                            <i class="fas fa-fw fa-star mr-2"></i>
                                            @lang('Solicitar orçamento')
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>
@endsection
