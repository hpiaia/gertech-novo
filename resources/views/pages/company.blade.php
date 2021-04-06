@extends('layouts.app')

@section('title', __('A empresa'))

@section('content')
    <section class="container mt-12">
        <h2 class="text-4xl text-primary font-bold">
            @lang('Nossa história')
        </h2>

        <p class="leading-relaxed text-gray-800 mt-8">
            @lang('Após uma longa jornada de mais de 15 anos de atuação profissional em grandes indústrias de referência mundial em equipamentos para a agroindústria, em 2013 criamos a Gertech Soluções Industriais para oferecer prestação de serviços de assistência técnica para máquinas nas linhas de pesagem e classificação em todo o Brasil.')
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
    </section>
@endsection
