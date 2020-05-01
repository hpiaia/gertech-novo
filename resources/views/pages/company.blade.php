@extends('layouts.app')

@section('title', __('A empresa'))

@section('content')
    <section class="container mt-12">
        <h2 class="text-4xl text-primary font-bold">
            @lang('Nossa história')
        </h2>

        <p class="leading-relaxed text-gray-800 mt-8">
            @lang('Após uma longa jornada de mais de 15 anos de atuação profissional em grandes indústrias de referência mundial em equipamentos para a agroindústria, em 2013 Vanderlei Gerhart decide criar a Gertech Soluções Industriais para oferecer prestação de serviços de assistência técnica para máquinas nas linhas de pesagem e classificação em todo o Brasil.')
        </p>

        <p class="leading-relaxed text-gray-800 mt-6">
            @lang('Com reconhecida qualidade na entrega dos produtos e serviços, a Gertech se torna um importante aliado às agroindústrias e uma das principais empresas de manutenção industrial do segmento, conquistando a confiança das principais unidades agroindustriais do Brasil.')
        </p>

        <p class="leading-relaxed text-gray-800 mt-6">
            @lang('Hoje a Gertech Soluções Industriais agrega à manutenção industrial uma ampla linha de produtos e serviços, como: Nacionalização de peças e componentes, Eletrônica Industrial, Soluções de Automação, Retrofit de Máquinas, e Upgrade para Equipamentos obsoletos.')
        </p>

        <p class="leading-relaxed text-gray-800 mt-6">
            @lang('Em 2019 atendendo a crescente demanda da indústria por eficiência e gerenciamento remoto em tempo real, inicia-se uma nova fase, a Gertech Soluções Industriais começa projetar e fabricar suas próprias máquinas para pesagem e classificação, com sua marca: WEIMACH® uma abreviação de "Weight Machine", e dessa forma amplia sua atuação e passa a oferecer soluções completas e convergentes para a Indústria 4.0.')
        </p>

        <p class="leading-relaxed text-gray-800 mt-6">
            @lang('Hoje a Gertech Soluções Industriais oferece uma ampla linha de Checkweigher (Checadoras de pesos ou Controladora de pesos), Sorting Machine (Classificadoras), Controladores de Aves (Contadores de Aves), Terminais de pesagem e etiquetagem de caixas, entre outros produtos. E o mais importante, todos com conexão aos sistema de gestão e controle da agroindústria, facilitando a coleta e leitura de indicadores e otimizando a tomada de decisões.')
        </p>

        <div class="mt-12 sm:flex items-center justify-center">
            <div class="mx-12 md:mx-20 text-center">
                <a href="https://www.linkedin.com/in/vanderlei-gerhart-6a7a67157/" target="_blank">
                    <img src="{{ asset('img/vanderlei.jpeg') }}" class="w-40 rounded-full mx-auto">
                    <div class="mt-4 font-medium text-primary">
                        Vanderlei Gerhart
                    </div>
                    <div class="text-sm text-gray-600">
                        @lang('Sócio proprietário')
                    </div>
                </a>
            </div>

            <div class="mx-12 md:mx-20 text-center mt-12 sm:mt-0">
                <a href="https://www.linkedin.com/in/rudineigerhart/" target="_blank">
                    <img src="{{ asset('img/rudinei.jpeg') }}" class="w-40 rounded-full mx-auto">
                    <div class="mt-4 font-medium text-primary">
                        Rudinei Carlos Gerhart
                    </div>
                    <div class="text-sm text-gray-600">
                        @lang('Sócio administrador')
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
