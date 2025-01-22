@if (session('error_cat'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Seu carrinho parece estar Vazio',
        showConfirmButton: true
    })
</script>
@endif
@if (session('errorValidade'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Sua conta não está ativa, aguarde a validação para efetuar a compra',
        showConfirmButton: true
    })
</script>
@endif



@if (session('helpCreate'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Email Enviado Com Sucesso',
        showConfirmButton: true
    })
</script>
@endif



@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'OPS Algo deu Errado',
        showConfirmButton: true
    })
</script>
@endif
<section class="cta-area d-ldark-bg pt-55 pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="cta-item cta-item-d mb-30">
                    <h5 class="cta-title">Siga-nos</h5>
                    <p>Facilitamos a consolidação, o marketing e o rastreamento do seu site de mídia social.</p>
                    <div class="cta-social">
                        <div class="social-icon">
                            <a href="{{ $config->facebook }}" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $config->youtube }}" class="youtube"><i class="fab fa-youtube"></i></a>

                            <a href="{{ $config->linkedin }}" class="whatsapp"><i class="fab fa-whatsapp"></i></a>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cta-item mb-30">
                    <h5 class="cta-title">Inscreva-se no boletim informativo</h5>
                    <p>Junte-se a mais de 60.000 assinantes e receba um novo cupom de desconto todos os sábados.</p>
                    <div class="subscribe__form">
                        <form action="#">
                            <input type="email" placeholder="Digite seu email aqui...">
                            <button>Inscrever-Se</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- cta-area-end -->
<footer>
    <div class="fotter-area d-dark-bg">
        <div class="footer__top pt-80 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 order-last-md">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="footer__widget">
                                    <div class="footer__widget-title">
                                        <img src="{{ asset('Site/img/logo/logo.png') }}" width="80" alt="logo">
                                    </div>
                                    <div class="footer__widget-content">
                                      <p>Tão rápido que ninguém viu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="footer__widget">
                                    <div class="footer__widget-title">
                                        <h4>Links</h4>
                                    </div>
                                    <div class="footer__widget-content">
                                        <div class="footer__link">
                                            <ul>
                                                <li><a href="{{ route('site.home') }}">Home</a></li>
                                                <li><a href="{{ route('site.about') }}">Sobre Nós</a></li>
                                                <li><a href="{{ route('site.contact') }}">
                                                    CONTATE-NOS</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 order-first-md">
                        <div class="footer__top-left">
                            <div class="row">

                                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title">
                                                    <h4>Siga-nos</h4>
                                                </div>
                                                <div class="social-icon">
                                                    <a href="{{ $config->facebook }}" class="facebook"><i class="fab fa-facebook-f"></i></a>

                                                    <a href="{{ $config->youtube }}" class="youtube"><i class="fab fa-youtube"></i></a>

                                                    <a href="{{ $config->linkedin }}" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div><div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                    <div class="footer__widget">
                                        <div class="footer__widget-title mb-20">
                                            <h4>
                                                Sobre a loja</h4>
                                        </div>
                                        <div class="footer__widget-content">
                                            <p class="footer-text mb-35">Tão rápido que ninguém viu</p>
                                            <div class="footer__hotline d-flex align-items-center mb-10">
                                                <div class="icon mr-15">
                                                    <i class="fal fa-headset"></i>
                                                </div>
                                                <div class="text">
                                                    <h4>Pergunta? Ligue para nós 24/7!</h4>
                                                    <span><a href="tel:">(+244) {{ $config->telefone }}</a></span>
                                                </div>
                                            </div>
                                            <div class="footer__info">
                                                <ul>
                                                    <li>
                                                        <span>Add:  <a target="_blank" href="#">{{ $config->address }}</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom-content pt-55 pb-45">
                    <div class="row">
                        <div class="col-xl-12">

                            <div class="copy-right-area text-center">
                                <p>Copyright © <span>shazzam.</span> Todos os direitos reservados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->






  <script src="{{ asset('Site/js/vendor/jquery.js') }}"></script>
  <script src="{{ asset('Site/js/vendor/waypoints.js')}} "></script>
  <script src="{{ asset('Site/js/bootstrap-bundle.js')}}"></script>
  <script src="{{ asset('Site/js/meanmenu.js')}}"></script>
  <script src="{{ asset('Site/js/swiper-bundle.js')}}"></script>
  <script src="{{ asset('Site/js/tweenmax.js')}}"></script>
  <script src="{{ asset('Site/js/owl-carousel.js')}}"></script>
  <script src="{{ asset('Site/js/magnific-popup.js')}}"></script>
  <script src="{{ asset('Site/js/parallax.js')}}"></script>
  <script src="{{ asset('Site/js/backtotop.js')}}"></script>
  <script src="{{ asset('Site/js/nice-select.js')}}"></script>
  <script src="{{ asset('Site/js/countdown.min.js')}}"></script>
  <script src="{{ asset('Site/js/counterup.js')}}"></script>
  <script src="{{ asset('Site/js/wow.js')}}"></script>
  <script src="{{ asset('Site/js/isotope-pkgd.js')}}"></script>
  <script src="{{ asset('Site/js/imagesloaded-pkgd.js')}}"></script>
  <script src="{{ asset('Site/js/ajax-form.js')}}"></script>
  <script src="{{ asset('Site/js/main.js')}} "></script>
</body>
</html>
