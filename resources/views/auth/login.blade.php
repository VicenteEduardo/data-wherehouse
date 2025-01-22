@extends('layouts.merge.site')
@section('titulo', 'LOGIN')
@section('content')
<main>
    <!-- page-banner-area-start -->
    <div class="page-banner-area page-banner-height-2" data-background="Site/assets/img/banner/page-banner-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-banner-content text-center">
                        <h4 class="breadcrumb-title">
                            Minha conta</h4>
                        <div class="breadcrumb-two">
                            <nav>
                               <nav class="breadcrumb-trail breadcrumbs">
                                  <ul class="breadcrumb-menu">
                                     <li class="breadcrumb-trail">
                                        <a href="{{ route('site.home') }}"><span>Home</span></a>
                                     </li>
                                     <li class="trail-item">
                                        <span>Iniciar Sessão</span>
                                     </li>
                                  </ul>
                               </nav>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-banner-area-end -->

    <!-- account-area-start -->
    <div class="account-area mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="basic-login mb-50">
                        <h5>Login</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
                            <label for="name">Email <span>*</span></label>
                            <input id="name" type="email" name="email" :value="old('email')" placeholder="email">
                            <label for="pass">Password <span>*</span></label>
                            <input id="pass" type="password" name="password" placeholder="password">
                            <div class="login-action mb-10 fix">
                                <span class="log-rem f-left">
                                   <input id="remember" type="checkbox">
                                   <label for="remember">Remember me</label>
                                </span>
                                <span class="forgot-login f-right">
                                   <a href="/forgot-password">Perdeu sua senha?</a>
                                </span>
                            </div>


                    <x-button class="tp-in-btn w-100">
                        {{ __('Log in') }}
                    </x-button>

                    <div class="text-center">
                        <p>Não é um membro? <a href="{{route('site.customerAccount.create') }}">Register</a></p>
                        <p>

<!--  <a href="/login/facebook" class="btn btn-link btn-floating mx-1">     <i class="fab fa-facebook-f"></i></i></a>-->




                        <a href="/login/google" class="btn btn-link btn-floating mx-1">   <i class="fab fa-google"></i></a>

                        <!--   <a href="/login/github" class="btn btn-link btn-floating mx-1"> <i class="fab fa-github"></i></a>-->



                        </button>
                      </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- account-area-end -->

    @if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sua conta foi criada com sucesso!',
            showConfirmButton: true
        })
    </script>
@endif

</main>
@endsection
