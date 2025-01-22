@if (null !== Auth::user())
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="{{ route('admin.user.show', Auth::User()->id) }}" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="{{ Auth::User()->photo }}"
                            alt="{{ Auth::User()->name }}">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::User()->name }}</p>
                        <p class="designation">{{ Auth::User()->level }}</p>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-category">Dashboard</li>
            <li class="nav-item">
                <li class="nav-item">
                    <a target="_blank" class="nav-link" href="{{ route('site.home') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Ir ao Site</span>
                    </a>
                </li>
                  <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->level=="Administrador")

                {{-- manufactures --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.slideshow.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Slideshow</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level !="Administrador")
                   <li class="nav-item nav-category mt-2">Menu Clientes</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.oder.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Meus  Pedidos</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=="Administrador")

                <li class="nav-item nav-category ">Clientes</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.ordersProduct.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">      Encomendas
                            </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.client.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">     Clientes
                            </span>
                    </a>
                </li>
                <li class="nav-item nav-category ">Produtos</li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.produt.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">      Produtos
                            </span>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.featureProduct.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">      produtos em destaque
                            </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dealsDay.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">  Promoções do Dia
                            </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.publicity.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">  Publicidades</span>
                    </a>
                </li>


                <li class="nav-item nav-category ">Estatística</li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.statistic.payment') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">      Pagamentos
                            </span>
                    </a>
                </li>
                <li class="nav-item nav-category ">Menu Definições</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.configuration.show') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Configurações</span>
                    </a>
                </li>
            @endif
            @if ('Administrador' == Auth::user()->level)
                <li class="nav-item mb-5">
                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Utilizadores</span>
                    </a>
                </li>
            @endif
            @endif
        </ul>
    </nav>

