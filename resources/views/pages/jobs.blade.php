@extends('layouts.app')

@section('title', __('Trabalhe conosco'))

@section('content')
    <section class="container mt-12">
        <h2 class="text-4xl text-primary font-bold">
            @lang('Trabalhe conosco')
        </h2>

        <div class="mt-4">
            @foreach ($jobs as $job)
                <div class="border-b py-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-medium leading-7 text-primary sm:leading-9 sm:truncate">
                                {{ $job->title }}
                            </h2>
                            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
                                <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mr-6">
                                    <i class="fas fa-fw fa-map-marker-alt mr-2"></i>
                                    {{ $job->location }}
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="ml-3 shadow-sm rounded-md">
                                <a href="{{ $job->contactPath() }}" class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded-md text-white bg-secondary hover:bg-secondary-dark">
                                    <i class="fas fa-fw fa-star text-white"></i>
                                    <span class="ml-2">
                                        @lang('Quero me candidatar')
                                    </span>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        {!! nl2br($job->description) !!}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
