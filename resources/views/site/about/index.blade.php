@extends('layouts.merge.site')
@section('titulo', 'Sobre Nós')
@section('content')
    <main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height" data-background="{{ asset('Site/img/about/solbre.JPG ') }}" style="width: 100%, " >

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h3>Sobre Nós</h3>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-banner-area-end -->

        <!-- about-area-start -->
        <div class="about-area pt-80 pb-80" data-background="  ">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-content">
                            <span>
                                SOBRE NOSSA LOJA ONLINE</span>
                            <h4>PIMENTEL INVESTMENT</h4>
                            <h5 class="banner-t mb-30">
                                Com mais de 10 anos de experiência</h5>

                            <p>Somos um grupo de direito
                                Angolano com o Nif: 5000204889 Representado Miguel
                                Pimentel, Diretor Administrativo. Agregamos como parceiro
                                um dos maiores produtores, distribuidor e líder em distintos
                                mercados no território nacional. A mesma, desenvolve
                                diferentes actividades em diversos sectores tais como,
                                Socioculturais, Ativação de marcas distribuiçao de Bens e
                                Serviços, e que está seriamente empenhado no processo de
                                desenvolvimento social e económico a nível do País.</p>
                                <P>O projecto tem como desiderato principal prestação de serviço,
                                    podendo ainda dedicar-se a qualquer outro ramo de comércio
                                    ou indústria em que os sócios acordem e seja permitido por
                                    Lei.
                                    </P>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-image w-img">
                            <img src="{{ asset('Site/img/about/quemsomos.png') }}" height="350" width="150" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area-end -->

        <!-- services-area-start -->
        <div class="services-area pt-70 light-bg-s pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="abs-section-title text-center">
                            <span>Apreenda um Pouco SOBRE Nós</span>
                            <h4>
                                Ideia completa do clientes</h4>

                        </div>
                    </div>
                </div>
                <div class="row mt-40">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item mb-30">
                            <div class="services-icon mb-25">
                                <i class="fal fa-share-square"></i>
                            </div>
                            <h6>MISSÃO</h6>
                            <p>É sermos reconhecidos pela qualidade dos nossos serviços, pela
                                valorização do nosso pessoal e
                                pelos princípios éticos e morais.
                                Surpreender os nossos clientes
                                utilizando a tecnologia moderna,
                                na superação dos seus problemas.
                                Inspirar e liderar o mercado como
                                uma das maiores empresa do Pais,
                                capaz de solucionar e prestar
                                serviços para empresas, famílias e
                                pessoas singulares.</p>
                            <div class="s-count-number">
                                <span>01</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item mb-30">
                            <div class="services-icon mb-25">
                                <i class="fal fa-file"></i>
                            </div>
                            <h6>VISÃO</h6>
                            <p>A Pimentel Investment fundamenta-se
                                na experiência da sua equipa técnica que
                                integra especialistas qualificados nas
                                actividades a que se propõe empreender
                                para melhor satisfação do segmento de
                                mercado alvo, e a população Angolana
                                no geral. Tem um futuro promissor, tendo em conta os objectivos que pretende
                                atingir, num futuro breve expandir cada
                                vez, mas a sua actividade e dinâmica de
                                atender da melhor forma a demanda do
                                mercado através do profissionalismo,
                                humanismo e da receptividade do mercado.</p>
                            <div class="s-count-number">
                                <span>02</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item mb-30">
                            <div class="services-icon mb-25">
                                <i class="fal fa-thumbs-up"></i>
                            </div>
                            <h6>VALORES</h6>
                            <p>Satisfazer os clientes com transparência, comunicando de
                                forma aberta e clara
                                mesmo perante situações dificies. Focar
                                em resultados positivos, ser ousados e inovadores na criação e
                                determinados na busca de soluções.</p>
                            <div class="s-count-number">
                                <span>03</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services-area-end -->


        <!-- location-area-start -->
        <div class="location-area pt-70 pb-25">
            <div class="container">
                <div class="row mb-25">
                    <div class="col-xl-12">
                        <div class="abs-section-title text-center">
                            <span>
                              Serviços</span>
                            <h4>Nossos Serviços</h4>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="location-item mb-30">
                            <div class="location-image w-img mb-20">
                                <img src="{{ asset('Site/img/logo/logo.png') }}" alt="">
                            </div>
                            <h6>ATIVAÇÃO DE MARCAS</h6>
                            <div class="sm-item-loc sm-item-border mb-20">

                                <div class="sm-content">

                                    <p>A ativação de marca consiste no desenvolvimento de um plano
                                        de ação que contemple as iniciativas necessárias em todos os
                                        âmbitos para construir a imagem de marca desejada, de acordo com a estratégia que tenha sido previamente determinada.
                                        No informal desenhamos um plano de de ação aonde montamos uma estrutura de Palcos, Som, iluminação e quiosques
                                        de ativação durante 15 ou 1 mês numa determinada província
                                        promovendo um conjuto de métodos da marca alvo gerando
                                        vendas e hábitos. </p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="location-item mb-30">
                            <div class="location-image w-img mb-20">
                                <img src="{{ asset('Site/img/logo/logo.png') }}" alt="">
                            </div>
                            <h6>DISTRIBUIÇÃO NUMÉRICA</h6>
                            <div class="sm-item-loc sm-item-border mb-20">

                                <div class="sm-content">

                                    <p>Trabalho de pesquisa em um
                                        território ou província aonde
                                        a marca precisa de input.
                                        Desenvolvemos ativação e
                                        vendas porta porta com objetivo
                                        de monitorar o desenvolvimento
                                        do impacto da marca naquele
                                        território.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="location-item mb-30">
                            <div class="location-image w-img mb-20">
                                <img src="{{ asset('Site/img/logo/logo.png') }}" alt="">
                            </div>
                            <h6>MONTAGEM DE SHOWS</h6>
                            <div class="sm-item-loc sm-item-border mb-20">

                                <div class="sm-content">

                                    <p>Montamos shows para empresas
                                        parceiras nas 18 províncias.
                                        Fornecendo Som, Luzes, palco e
                                        Ecrãs Leds.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="location-item mb-30">
                            <div class="location-image w-img mb-20">
                                <img src="{{ asset('Site/img/logo/logo.png') }}" alt="">
                            </div>
                            <h6>MONTAGEM DE FEIRAS</h6>
                            <div class="sm-item-loc sm-item-border mb-20">

                                <div class="sm-content">

                                    <p>Durante o ano criamos um calendário de Feiras aonde
                                        passamos nas 17 províncias de Angola desenvolvendo
                                        feiras de ativação. Consiste em montagens de
                                        quiosques personalizadas com feirantes.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- location-area-end -->



    </main>
@endsection
