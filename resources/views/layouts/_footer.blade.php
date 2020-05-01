<footer class="mt-16 bg-cover text-white" style="background-image: url('/img/bg-footer.png')">
    <div class="container py-10">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 lg:w-4/12 md:pr-20">
                <img src="{{ asset('img/logo-negative.png') }}" alt="Gertech" class="w-48">
                <p class="text-xs mt-4">
                    @lang('Referência em equipamentos para controle de produção para a indústria de alimentos.')
                </p>
            </div>

            <div class="w-full md:w-1/2 lg:w-2/12 mt-8 md:mt-0">
                <h4 class="font-bold">
                    @lang('Menu')
                </h4>
                <ul class="text-sm">
                    <li class="mt-4">
                        <a href="{{ route('home') }}">@lang('Início')</a>
                    <li>
                    <li class="mt-4">
                        <a href="{{ route('company') }}">@lang('A empresa')</a>
                    <li>
                    <li class="mt-4">
                        <a href="{{ route('solutions') }}">@lang('Soluções')</a>
                    <li>
                </ul>
            </div>

            <div class="w-full md:w-1/2 lg:w-3/12 mt-8 md:mt-12 lg:mt-0">
                <h4 class="font-bold">
                    @lang('Contato')
                </h4>
                <ul class="text-sm">
                    <li class="mt-4">
                        <a href="{{ route('jobs') }}">@lang('Trabalhe conosco')</a>
                    <li>
                    <li class="mt-4">
                        <a href="{{ route('contact') }}">@lang('Contato')</a>
                    <li>
                </ul>
            </div>

            <div class="w-full md:w-1/2 lg:w-3/12 mt-8 lg:mt-0">
                <h4 class="font-bold">
                    @lang('Onde estamos')
                </h4>
                <ul class="text-sm">
                    <li class="mt-4">
                        <div class="flex">
                            <i class="fas fa-fw fa-map-marker-alt mt-2"></i>
                            <span class="ml-4">
                                Rua José Bonifácio, 727D <br>
                                Chapecó - SC, Brazil
                            </span>
                        </div>
                    <li>
                    <li class="mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-fw fa-envelope"></i>
                            <span class="ml-4">
                                gertech@gertech.ind.br
                            </span>
                        </div>
                    <li>
                    <li class="mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-fw fa-phone"></i>
                            <span class="ml-4">
                                +55 49 3323-6794
                            </span>
                        </div>
                    <li>
                </ul>
            </div>
        </div>

        <div class="mt-12 lg:mt-8">
            <div class="flex justify-center">
                <a href="https://www.linkedin.com/company/37468138">
                    <i class="fab text-3xl mx-4 fa-linkedin"></i>
                </a>
                <a href="https://www.facebook.com/gertechsolucoes/">
                    <i class="fab text-3xl mx-4 fa-facebook"></i>
                </a>
                <a href="https://www.youtube.com/watch?v=A9PtWLX2JDI">
                    <i class="fab text-3xl mx-4 fa-youtube"></i>
                </a>
            </div>
        </div>

        <div class="mt-8 text-sm text-center">
            &copy; {{ date('Y') }} Gertech Soluções Industriais. @lang('Todos os direitos reservados').
        </div>
    </div>
</footer>
