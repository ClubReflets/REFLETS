@extends('layouts.base')

@section('body')
<div class="admin-wrapper uk-offcanvas-content">
    <!-- Navbar -->
    <header class="uk-position-fixed">
        <div class="uk-container uk-container-expand uk-background-secondary">
            <nav uk-navbar class="uk-light">
                <div class="uk-navbar-left">
                    @yield('breadcrumbs')
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
                        <li>
                            <a class="uk-navbar-toggle"
                               data-uk-toggle data-uk-navbar-toggle-icon
                               href="#offcanvas-nav">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Sidebar -->
    <aside class="sidebar uk-light uk-visible@m">
        <header class="logo uk-flex uk-flex-middle">
            <a href="{{ route('admin') }}" class="uk-text-lead">Logo</a>
        </header>
        <section class="links">
            @include('components/admin/sidebar_links')
        </section>
        <footer>
            <ul class="uk-nav uk-nav-default" data-uk-nav>
                <li>
                    <a href="#">
                        <span data-uk-icon="icon: sign-out"></span>
                        Se déconnecter
                    </a>
                </li>
            </ul>
        </footer>
    </aside>
    <!-- Content -->
    <main>
        <div class="uk-container uk-container-expand">
            <header class="uk-grid">
                <div>
                    <h2>@yield('title')</h2>
                </div>
                @yield('content-header')
            </header>
            <hr>
            @yield('content')
        </div>
    </main>
    <!-- OFFCANVAS -->
    <div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
            <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
            @include('components.admin.sidebar_links')
        </div>
    </div>
</div>
@endsection
