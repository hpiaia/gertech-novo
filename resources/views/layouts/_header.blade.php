<header class="z-10">
    <div class="bg-primary text-white">
        <div class="container lg:px-12 py-2 text-sm flex items-center">
            <div class="hidden lg:block">
                <i class="fas fa-map-marker-alt text-secondary"></i>
                <span class="ml-2">Rua José Bonifácio 727D, Chapecó - SC, @lang('Brasil')</span>

                <i class="fas fa-envelope text-secondary ml-8"></i>
                <span class="ml-2">gertech@gertech.ind.br</span>

                <i class="fas fa-phone text-secondary ml-8"></i>
                <span class="ml-2">+55 49 3323-6794</span>
            </div>

            <div class="flex ml-auto items-center">
                <a href="{{ route('locale', 'pt-br') }}" class="mr-3">
                    <img src="{{ asset('/img/flags/br.png') }}" alt="" class="w-6">
                </a>
                <a href="{{ route('locale', 'es') }}" class="mr-3">
                    <img src="{{ asset('/img/flags/es.png') }}" alt="" class="w-6">
                </a>
                <a href="{{ route('locale', 'en') }}">
                    <img src="{{ asset('/img/flags/us.png') }}" alt="" class="w-6">
                </a>
            </div>
        </div>
    </div>

    <div class="shadow">
        <div class="container lg:px-12 py-4 lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Gertech" class="w-48">
                </a>

                <div class="lg:hidden">
                    <button id="navbar-toggle" class="border border-primary px-3 py-2 rounded transition transition-all ease-in-out duration-200 text-primary hover:bg-primary hover:text-white">
                        <i class="fas fa-bars text-3xl"></i>
                    </button>
                </div>
            </div>

            <nav class="hidden flex flex-col text-center mt-4 lg:mt-0 lg:text-left lg:block" id="navbar">
                <a class="text-lg mt-3 lg:mt-0 lg:ml-6 text-primary hover:text-secondary {{ active('home', 'text-secondary') }}" href="{{ route('home') }}">
                    @lang('Início')
                </a>
                <a class="text-lg mt-3 lg:mt-0 lg:ml-6 text-primary hover:text-secondary {{ active('company', 'text-secondary') }}" href="{{ route('company') }}">
                    @lang('A empresa')
                </a>
                <a class="text-lg mt-3 lg:mt-0 lg:ml-6 text-primary hover:text-secondary {{ active('solutions', 'text-secondary') }}" href="{{ route('solutions') }}">
                    @lang('Soluções')
                </a>
                <a class="text-lg mt-3 lg:mt-0 lg:ml-6 text-primary hover:text-secondary {{ active('jobs', 'text-secondary') }}" href="{{ route('jobs') }}">
                    @lang('Trabalhe conosco')
                </a>
                <a class="text-lg mt-3 lg:mt-0 lg:ml-6 text-primary hover:text-secondary {{ active('contact', 'text-secondary') }}" href="{{ route('contact') }}">
                    @lang('Contato')
                </a>
            </nav>
        </div>
    </div>
</header>
