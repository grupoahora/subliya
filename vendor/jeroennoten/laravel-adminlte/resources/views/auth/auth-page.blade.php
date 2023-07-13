@extends('adminlte::mastersubliya')

@php($dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home'))

@if (config('adminlte.use_route_url', false))
    @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
@else
    @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop



@section('body')
    <div class="container-fluid  px-0 mx-0">
        <header class="mx-0 px-0 w-100 d-flex align-items-start">
            <div class="position-relative opacity-subliya-15 w-100">
                <div class=" bg-subliya-one"></div>
                <div class=" bg-subliya-two"></div>
                <div class=" bg-subliya-three"></div>
                <div class=" bg-subliya-four"></div>
            </div>
        </header>
        
    </div>
    <main class="container">
            {{-- <div class="container"> --}}
                <div class="row h-subliya-login text-center">
                    <div class=" col center-subliya-login ">

                        {{-- Logo --}}
                        <div class="login-logo">
                            <a href="{{ $dashboard_url }}">
                                <img src="{{ asset(config('adminlte.logo_img')) }}">
                                {{-- {!! config('adminlte.logo', '<b>Admin</b>LTE') !!} --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-7 center-subliya-login " style="width: 721px;">
                        <div
                            class=" bg-subliya-transparent-login {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                            {{-- Card Header --}}
                            @hasSection('auth_header')
                                <div
                                    class="card-header bg-subliya-transparent-login {{ config('adminlte.classes_auth_header', '') }}">
                                    <div class="d-flex ">
                                        <div class="my-auto">

                                            <img class="mr-2 my-1 " src="svg/circle-user-regular.svg"
                                                style="width: 30px; height: 30px; background-color: #0c005200; " alt="">
                                        </div>
                                        <h2 class=" my-auto me-1 ms-1 font-subliya-login text-bold text-center ">
                                            @yield('auth_header')
                                        </h2>
                                        <h5 class=" ms-1 my-auto fonttwo-subliya-login text-center ">

                                            @yield('auth_header_dos')
                                        </h5>
                                    </div>
                                </div>
                            @endif

                            {{-- Card Body --}}
                            <div
                                class="card-body {{ $auth_type ?? 'login' }}-card-body rounded-subluya-bodyform {{ config('adminlte.classes_auth_body', '') }}">
                                @yield('auth_body')
                            </div>

                            {{-- Card Footer --}}
                            @hasSection('auth_footer')
                                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                                    @yield('auth_footer')
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </main>
        <footer class="">

            <div class=" mx-0 px-0 w-100 d-flex align-items-end">
                <div class="position-relative opacity-subliya-15 w-100">
                    <div class=" bg-subliya-four-b"></div>
                    <div class=" bg-subliya-three-b"></div>
                    <div class=" bg-subliya-two-b"></div>
                    <img class="bg-subliya-one-b" src="img/azul.png" alt="">
                    
                    {{-- <div class=" bg-subliya-one-b"></div> --}}
                    
                </div>
            </div>
        </footer>

@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
