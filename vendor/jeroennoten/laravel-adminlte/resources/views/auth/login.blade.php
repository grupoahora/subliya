@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@php($login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login'))
@php($register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register'))
@php($password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset'))

@if (config('adminlte.use_route_url', false))
    @php($login_url = $login_url ? route($login_url) : '')
    @php($register_url = $register_url ? route($register_url) : '')
    @php($password_reset_url = $password_reset_url ? route($password_reset_url) : '')
@else
    @php($login_url = $login_url ? url($login_url) : '')
    @php($register_url = $register_url ? url($register_url) : '')
    @php($password_reset_url = $password_reset_url ? url($password_reset_url) : '')
@endif

@section('auth_header', __('adminlte::adminlte.login_message'))
@section('auth_header_dos', __('adminlte::adminlte.login_message_dos'))
@section('auth_body')
    <form action="{{ $login_url }}" class="mx-lg-5 mx-0" method="post">
        @csrf

        {{-- Email field --}}
        <div class="input-group mb-5 mt-4">
            {{-- <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span> --}}
            <img class="mr-2 my-1" src="svg/email.svg" style="width: 25px; height: 30px; background-color: #0c005200; "
                alt="">

            <input type="email" name="email"
                class="form-control input-form-login me-lg-4  ms-lg-3 mx-1 placeholderinput-subliya @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>

            {{-- <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div> --}}

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="input-group mb-5 ">
            {{-- <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span> --}}
            <img class="mr-2 my-1" src="svg/padlock.svg" style="width: 25px; height: 30px; background-color: #0c005200; "
                alt="">

            <input type="password" name="password"
                class="form-control me-lg-4  ms-lg-3 mx-1 input-form-login placeholderinput-subliya @error('password') is-invalid @enderror"
                placeholder="{{ __('adminlte::adminlte.password') }}">

            {{-- <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div> --}}

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Login field --}}
        <div class="input-group">
            <div class="col-5 text-start ">
                <div class="icheck-primary" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                    <input class="inputcheckbox-subliya" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember" class="text-link-subliya ">
                        {{ __('adminlte::adminlte.remember_me') }}
                    </label>
                </div>
            </div>
            {{-- Password reset link --}}
            @if ($password_reset_url)
                <div class="col-3 text-start fontsubliya">
                    <a href="{{ $password_reset_url }}" class=""
                        style="color: #170090; ">
                        {{ __('adminlte::adminlte.i_forgot_my_password') }}
                    </a>
                </div>
                <div class="col-4 text-start fontsubliya px-0">
                    <a href="{{ $register_url }}" class="" style="color: #170090; ">
                        {{ __('adminlte::adminlte.register_a_new_membership') }}
                    </a>
                </div>
            @endif



        </div>

   
@stop

@section('auth_footer')

        <button type=submit
            class=" p-subliya-button-form float-end me-4 {{-- {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }} --}}">
            {{-- <span class="fas fa-sign-in-alt"></span> --}}
            {{ __('adminlte::adminlte.sign_in') }}
        </button>
     </form>

@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
