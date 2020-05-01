@extends('layouts.app')

@section('title', __('Contato'))

@section('content')
    <div id="contact-map" class="w-full" style="height: 400px;"></div>

    <section class="container mt-12">
        <h2 class="text-4xl text-primary font-bold">
            @lang('Fale conosco')
        </h2>

        <div class="lg:flex">
            <div class="lg:w-8/12">
                <form action="" method="POST" class="mt-8" id="contact-form">
                    @if(session()->has('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded" role="alert">
                            <p class="font-bold">@lang('Mensagem enviada!')</p>
                            <p>@lang('Sua mensagem foi enviada. Estaremos retornando assim que possível!')</p>
                        </div>
                    @endif

                    @csrf

                    <label class="block">
                        <span class="text-gray-700">
                            @lang('Nome')
                            <span class="text-secondary">*</span>
                        </span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="@lang('Informe seu nome completo')" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="block mt-4">
                        <span class="text-gray-700">
                            @lang('E-mail')
                            <span class="text-secondary">*</span>
                        </span>
                        <input type="email" class="form-input mt-1 block w-full" placeholder="@lang('Informe seu e-mail')" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="block mt-4">
                        <span class="text-gray-700">
                            @lang('Telefone')
                            <span class="text-secondary">*</span>
                        </span>
                        <input type="tel" class="form-input mt-1 block w-full" placeholder="@lang('Informe seu telefone')" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="block mt-4">
                        <span class="text-gray-700">
                            @lang('Assunto')
                            <span class="text-secondary">*</span>
                        </span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="@lang('Sobre o que deseja conversar?')" name="subject" value="{{ old('subject', request('subject')) }}" required>
                        @error('subject')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="block mt-4">
                        <span class="text-gray-700">
                            @lang('Mensagem')
                            <span class="text-secondary">*</span>
                        </span>
                        <textarea class="form-textarea mt-1 block w-full" rows="6" placeholder="@lang('Por que está entrando em contato conosco?')" name="message" required>{{ old('message', request('message')) }}</textarea>
                        @error('message')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </label>

                    <button class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded-md text-white bg-secondary hover:bg-secondary-dark mt-8">
                        <i class="fas fa-fw fa-paper-plane mr-2"></i>
                        @lang('Enviar mensagem')
                    </button>
                </form>
            </div>
            <div class="lg:w-4/12 lg:pl-16 mt-12 lg:mt-0">
                <h2 class="text-3xl text-primary font-medium">
                    @lang('Onde estamos')
                </h2>

                <ul>
                    <li class="mt-4">
                        <div class="flex">
                            <i class="fas fa-fw text-secondary fa-map-marker-alt mt-2"></i>
                            <span class="ml-4">
                                Rua José Bonifácio 727D <br>
                                Chapecó - SC, Brazil
                            </span>
                        </div>
                    <li>
                    <li class="mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-fw text-secondary fa-envelope"></i>
                            <span class="ml-4">
                                gertech@gertech.ind.br
                            </span>
                        </div>
                    <li>
                    <li class="mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-fw text-secondary fa-phone"></i>
                            <span class="ml-4">
                                +55 49 3323-6794
                            </span>
                        </div>
                    <li>
                    <li class="mt-4">
                        <div class="flex items-center">
                            <i class="fab fa-fw text-secondary fa-whatsapp"></i>
                            <span class="ml-4">
                                +55 49 98401-1000
                            </span>
                        </div>
                    <li>
                </ul>

                <h2 class="text-3xl text-primary font-medium mt-8">
                    @lang('Siga-nos')
                </h2>

                <div class="flex mt-4">
                    <a href="https://www.linkedin.com/company/37468138">
                        <i class="fab text-secondary text-3xl fa-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/gertechsolucoes/">
                        <i class="fab text-secondary text-3xl ml-8 fa-facebook"></i>
                    </a>
                    <a href="https://www.youtube.com/watch?v=A9PtWLX2JDI">
                        <i class="fab text-secondary text-3xl ml-8 fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
