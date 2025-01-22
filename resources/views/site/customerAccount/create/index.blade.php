@extends('layouts.merge.site')
@section('titulo', ' Criar Conta')
@section('content')
<main>
    <!-- page-banner-area-start -->
    <div class="page-banner-area page-banner-height-2" data-background="Site/assets/img/banner/page-banner-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-banner-content text-center">
                        <h4 class="breadcrumb-title">
                            Criar Conta</h4>
                        <div class="breadcrumb-two">
                            <nav>
                               <nav class="breadcrumb-trail breadcrumbs">
                                  <ul class="breadcrumb-menu">
                                     <li class="breadcrumb-trail">
                                        <a href="{{ route('site.home') }}"><span>Home</span></a>
                                     </li>
                                     <li class="trail-item">
                                        <span>Criar Conta</span>
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

    <div class="account-area mt-60 mb-70">
        <div class="container">
            <div class="row">
                <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
                <div class="col-lg-12">
                    <div class="basic-login">
                        <h5>Registro de Conta</h5>
                        <p class="text-danger">OBS: Os campos com o * são todos obrigatórios</p>
                        <form action="{{ route('site.customerAccount.store') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                            <div class="col-lg-6">
                                <label for="name">Nome  <span>*</span></label>
                                <input value="{{ old('name') }}" required name="name" id="name" type="text" placeholder="nome ">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone_number">Telefone Principal  <span>*</span></label>
                                <input value="{{ old('phone_number') }}" required name="phone_number" id="phone_number" type="text" placeholder="número de telefone">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone_number_secund">Telefone Secundário  <span></span></label>
                                <input value="{{ old('phone_number_secund') }}"  name="phone_number_secund"  id="phone_number_secund" type="text" placeholder="número de secundário">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email  <span>*</span></label>
                                <input value="{{ old('email') }}"  name="email" id="email" type="text" placeholder="Email">
                            </div>


                            <div class="col-lg-4">
                                <label for="password">Password  <span>*</span></label>
                                <input  value="{{ old('password') }}" id="password" type="password" name="password" placeholder="password">
                            </div>
                            <div class="col-lg-4">
                                <label for="password_confirmation">Confirmar Password  <span>*</span></label>
                                <input value="{{ old('password_confirmation') }}" id="password_confirmation" name="password_confirmation" type="password" placeholder="password_confirmation">
                            </div>
                            <div class="col-lg-4">
                                <label for="username">Tipo de Cliente  <span>*</span></label><br>
                                <select name="level" class="form-control" aria-label="Default select example">
                                    <option disabled>Escolha uma Opção </option>
                                    <option value="Grossistas">Grossistas</option>
                                    <option value="Semi-Grossistas">Semi-Grossistas</option>
                                    <option value="Distribuidores">Distribuidores</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <b class="mb-2 text-dark">Requisitos de senhas</b>
                            <p class="small text-dark mb-2"> Para criar uma nova senha, você deve atender a todos os seguintes requisitos:
                            </p>
                            <ul class="small text-dark pl-4 mb-0">
                                <li>Mínimo 11 caracteres</li>
                                <li>Pelo menos um caracter especial</li>
                                <li>Pelo menos um número</li>
                                <li>Pelo menos uma  letra maiúscula e uma letra minúscula</li>

                            </ul>
                        </div>
                            <div class="login-action mb-10 fix">
                                <p>Seus dados pessoais serão usados ​​para dar suporte à sua experiência neste site, para gerenciar o acesso à sua conta e para outros fins descritos em nosso <a href="#">Política de Privacidade</a>.</p>
                            </div>

                            <button class="tp-in-btn w-100">Register</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- account-area-end -->

</main>

@endsection
