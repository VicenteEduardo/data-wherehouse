@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')
<main>
    <!-- page-banner-area-start -->
    <div class="page-banner-area page-banner-height" data-background="Site/img/banner/banner-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-banner-content text-center">
                        <h4 class="breadcrumb-title">
                            Contate-nos</h4>
                        <div class="breadcrumb-two">
                            <nav>
                               <nav class="breadcrumb-trail breadcrumbs">
                                  <ul class="breadcrumb-menu">
                                     <li class="breadcrumb-trail">
                                        <a href="{{ route('site.home') }}"><span>Home</span></a>
                                     </li>
                                     <li class="trail-item">
                                        <span>
                                            Contate-nos</span>
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

    <!-- location-area-start -->
 <div class="container">
     <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">
        Contate-Nos</h2>
    <!--Section description-->


    <p class="text-center w-responsive mx-auto mb-5">Você tem alguma pergunta? Por favor, não hesite em nos Contactarsio diretamente. Nossa equipe entrará em contato com você dentro
        uma questão de horas para ajudá-lo.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form action="{{ route('site.help.email') }}"
            method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Nome</label>
                            <input name="name"
                            value="" size="40"
                            placeholder="Nome Completo"  id="name"  class="form-control">


                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Email</label>
                            <input name="email"
                        value="" size="40"

                            placeholder="Por favor digite um email válido" class="form-control">

                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Assunto</label>
                            <input type="text" name="subject"
                            value="" size="40"

                            placeholder="Insira pelo menos 8 caracteres do assunto" class="form-control">

                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <br>
                <div class="row my-6 mt-6">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form my-6 mt-6">
                            <textarea type="text" id="message"name="msg" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Menssagem</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->



            <div class="text-center text-md-left">

                    <button type="submit"
                    class="btn btn-primary">Mandar
                    uma mensagem</button>
            </div>
            <div class="status"></div>
        </div>
    </form>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>{{ $config->address }}</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>{{ $config->telefone }}</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>{{ $config->email }}</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
 </div>

    <!-- cmamps-area-start -->
    <div class="cmamps-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1899531.5831083965!2d105.806381!3d21.58504!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5n!5e0!3m2!1sen!2sus!4v1644226635446!5m2!1sen!2sus"></iframe>
    </div>
    <!-- cmamps-area-end -->



</main>
@endsection
