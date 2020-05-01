@extends('layouts.app')

@section('title', __('Início'))

@section('content')
    <x-banners></x-banners>

    <section class="container mt-12">
        <h2 class="text-4xl text-primary font-bold">
            @lang('O que nós fazemos')
        </h2>
        <p class="mt-2 leading-relaxed text-lg text-gray-600 max-w-lg">
            @lang('Ajudamos nossos clientes a alcançar resultados com a máxima eficiência, comprometimento e profissionalismo, oferecendo soluções rápidas e com a melhor relação custo benefício do mercado.')
        </p>
        <div class="lg:flex mt-8">
            <div class="lg:w-1/2 flex">
                <div>
                    <div class="bg-secondary px-5 py-4 rounded text-white">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
                <div class="ml-4 lg:pr-12">
                    <h3 class="font-medium font-lg">
                        @lang('Missão')
                    </h3>
                    <p class="mt-2 text-gray-800 leading-relaxed">
                        @lang('Desenvolver e fornecer soluções para a indústria de alimentos, através do emprego de alta tecnologia em pesagem, classificação e controle de indicadores de produção.')
                    </p>
                </div>
            </div>
            <div class="lg:w-1/2 flex mt-8 lg:mt-0">
                <div>
                    <div class="bg-secondary px-5 py-4 rounded text-white">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="font-medium font-lg">
                        @lang('Visão')
                    </h3>
                    <p class="mt-2 text-gray-800 leading-relaxed">
                        @lang('Ser referência no Brasil e no mundo no desenvolvimento e fornecimento de máquinas, peças e equipamentos para controle de produção para a indústria de alimentos.')
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-12 lg:flex lg:items-center">
        <div class="lg:w-1/2 lg:pr-12">
            <h2 class="text-4xl text-primary font-bold">
                @lang('Nossa história')
            </h2>
            <p class="mt-8 text-gray-800 leading-relaxed text-justify">
                @lang('Após uma longa jornada de mais de 15 anos de atuação profissional em grandes indústrias de referência mundial em equipamentos para a agroindústria, em 2013 Vanderlei Gerhart decide criar a Gertech Soluções Industriais para oferecer prestação de serviços de assistência técnica para máquinas nas linhas de pesagem e classificação em todo o Brasil.')

                <a href="{{ route('company') }}" class="text-secondary hover:underline">
                    @lang('leia mais')
                </a>
            </p>
            <div class="mt-8 font-medium">
                Vanderlei Gerhart
            </div>
            <div class="text-sm text-gray-600">
                @lang('Sócio proprietário')
            </div>
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 relative">
            <div class="lg:pl-12 pb-12">
                <img src="{{ asset('img/photo1.jpg') }}" alt="Foto 1" class="w-full shadow rounded-lg">
            </div>
            <div class="absolute bottom-0 w-full flex justify-center lg:justify-start">
                <div class="w-32 h-32 flex items-center justify-center text-white rounded-full bg-cover shadow" style="background-image: url('/img/about-circle.png')">
                    <div class="w-20 leading-tight text-center">
                        <div class="text-2xl text-secondary font-bold -mt-2">
                            20+
                        </div>
                        <div>
                            @lang('anos de experiência')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-12">
        <div class="container">
            <h2 class="text-4xl text-primary font-bold">
                @lang('Nossos clientes')
            </h2>
        </div>
        <div class="bg-gray-100 mt-4">
            <div class="container py-8">
                <x-customers></x-customers>
            </div>
        </div>
    </section>

    <section class="container mt-12 lg:flex lg:items-center">
        <div class="lg:w-1/2 lg:pr-12">
            <h2 class="text-4xl text-primary font-bold">
                @lang('Nosso compromisso')
            </h2>
            <p class="mt-8 text-gray-800 leading-relaxed text-justify">
                @lang('Reunimos mais de 20 anos de experiência em diversas áreas das engenharias: mecânica, elétrica, automação e software, nos possibilitando o desenvolvimento de tecnologia proprietária para embarcar em nossos equipamentos, e oferecer a máxima eficiência aos nossos clientes.')
            </p>
            <div class="mt-8 font-medium">
                Rudinei Carlos Gerhart
            </div>
            <div class="text-sm text-gray-600">
                @lang('Sócio administrador')
            </div>
        </div>
        <div class="lg:w-1/2 xl:pl-12 mt-8 lg:mt-0 relative">
            <h2 class="text-3xl text-primary font-medium">
                @lang('Quais são nossos valores?')
            </h2>
            <ul class="mt-6">
                <li class="mt-2">
                    <i class="fas fa-check-circle mr-2 text-secondary"></i>
                    @lang('Inovação é o nosso propósito;')
                </li>
                <li class="mt-2">
                    <i class="fas fa-check-circle mr-2 text-secondary"></i>
                    @lang('Responsabilidade e ética com todos os nossos stakeholders;')
                </li>
                <li class="mt-2">
                    <i class="fas fa-check-circle mr-2 text-secondary"></i>
                    @lang('Pessoas são nosso maior ativo;')
                </li>
                <li class="mt-2">
                    <i class="fas fa-check-circle mr-2 text-secondary"></i>
                    @lang('Serviço bem feito é resultado de gente competente e feliz;')
                </li>
                <li class="mt-2">
                    <i class="fas fa-check-circle mr-2 text-secondary"></i>
                    @lang('Zelamos pelo ambiente e equipamentos de nossos clientes;')
                </li>
                <li class="mt-2">
                    <i class="fas fa-check-circle mr-2 text-secondary"></i>
                    @lang('Atitude de servir está no nosso DNA;')
                </li>
            </ul>
            <a href="{{ route('company') }}" class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded-md text-white bg-secondary hover:bg-secondary-dark mt-8">
                @lang('Conheça nossa empresa')
            </a>
        </div>
    </section>
@endsection
