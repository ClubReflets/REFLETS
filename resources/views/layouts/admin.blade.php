@extends('layouts.base')

@section('body')
<div class="admin-wrapper uk-offcanvas-content">
    <!-- Navbar -->
    <header class="uk-position-fixed">
        <div class="uk-container uk-container-expand uk-background-secondary">
            <nav uk-navbar class="uk-light">
                <div class="uk-navbar-left">
                    <ul class="uk-breadcrumb">
                        <li><a href="">Item</a></li>
                        <li><a href="">Item</a></li>
                        <li><span>On it</span></li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="#">
                                Profil
                                <span data-uk-icon="icon: triangle-down"></span>
                            </a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li>
                                        <a href="#">
                                            <span data-uk-icon="icon: user"></span>
                                            Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span data-uk-icon="icon: settings"></span>
                                            Paramètres
                                        </a>
                                    </li>
                                    <li class="uk-nav-divider"></li>
                                    <li>
                                        <a href="#">
                                            <span data-uk-icon="icon: sign-out"></span>
                                            Se déconnecter
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Sidebar -->
    <aside class="sidebar uk-light uk-visible@m">
        <header class="logo uk-flex uk-flex-middle">
            <a href="#" class="uk-text-lead">Logo</a>
        </header>
        <section class="links">
            <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
                <li class="uk-nav-header">Gestion</li>
                <li>
                    <a href="#">
                        <span data-uk-icon="icon: home" class="uk-margin-small-right uk-icon"></span>
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span data-uk-icon="icon: social" class="uk-margin-small-right uk-icon"></span>
                        Organisation
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span data-uk-icon="icon:  image" class="uk-margin-small-right uk-icon"></span>
                        Galerie
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <!-- Content -->
    <main>
        <div class="uk-container uk-container-expand">
            @yield('content')
        </div>
    </main>
</div>
@endsection
