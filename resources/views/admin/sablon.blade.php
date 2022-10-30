<!doctype html>
<html class="fixed">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    @yield('meta')
    <meta name="keywords" content="{{ config("app.keywords") }}" />
    <meta name="description" content="">
    <meta name="author" content="softexts.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/select2/select2.css') }}" />
    @yield('css')

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="{{ url('/manage') }}" class="logo">
                <img src="{{ asset('p/img/sds2-logo.png') }}" height="45" width="190" alt="{{ config("app.name") }}" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">
            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="@if(Auth::check()){{ asset(Auth::user()->image) }}" alt="{{ Auth::user()->name.' '.Auth::user()->surname }}" @endif class="img-circle" @if(Auth::check()) data-lock-picture="{{ asset(Auth::user()->image) }}" @endif />
                    </figure>
                    <div class="profile-info"
                         data-lock-name="@if(Auth::check()){{ Auth::user()->name }}@endif"
                         data-lock-email="@if(Auth::check()){{ Auth::user()->degree }}@endif"
                         data-lock-pass="@if(Auth::check()){{ Auth::user()->degree }}@endif">

                        <span class="name">@if(Auth::check()){{ Auth::user()->name.' '.Auth::user()->surname }}@endif</span>
                        <span class="role">@if(Auth::check()){{ Auth::user()->degree }}@endif</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="{{ route('admin.edit', ['id' => Auth::user()->id, 'method' => 'PATCH', 'tur' => 'profile']) }}"><i class="fa fa-user"></i> Profil Güncelle</a>
                        </li>

                        <li>
                            <a role="menuitem" tabindex="-1" href="{{ route('admin.edit', ['id' => Auth::user()->id, 'method' => 'PATCH', 'tur' => 'pass']) }}"><i class="fa fa-user"></i> Şifre Güncelle</a>
                        </li>

                        <li>
                            <a role="menuitem" tabindex="-1" href="{{ url('cikis') }}"><i class="fa fa-power-off"></i> Çıkış</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navigation
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li class="{{ \App\Http\Controllers\Helper::isActive('dashboard') }}">
                                <a href="{{ route('dashboard') }}">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Yönetici Ana Sayfa</span>
                                </a>
                            </li>

                            <li class="nav-parent  {{ \App\Http\Controllers\Helper::isActive('slide.index', 'slide.create') }} ">
                                <a>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    <span>Slayt İşlemleri</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('slide.index') }}">
                                        <a href="{{ route('slide.index') }}">
                                            Slayt Listesi
                                        </a>
                                    </li>
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('slide.create') }}">
                                        <a href="{{ route('slide.create') }}">
                                            Slayt Ekle
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-parent  {{ \App\Http\Controllers\Helper::isActive('post.index', 'post.create') }} ">
                                <a>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    <span>Makale İşlemleri</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('post.index') }}">
                                        <a href="{{ route('post.index') }}">
                                            Makale Listesi
                                        </a>
                                    </li>
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('post.create') }}">
                                        <a href="{{ route('post.create') }}">
                                            Makale Ekle
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent {{ \App\Http\Controllers\Helper::isActive('category.index', 'category.create') }}  ">
                                <a>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <span>Kategori İşlemleri</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('category.index') }}">
                                        <a href="{{ route('category.index') }}">
                                            Kategori Listesi
                                        </a>
                                    </li>
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('category.create') }}">
                                        <a href="{{ route('category.create') }}">
                                            Kategori Ekle
                                        </a>
                                    </li>
                                </ul>
                            </li>





                            <hr class="separator">

                            <div class="sidebar-widget widget-tasks">
                                <div class="widget-header">
                                    <h6>Proje Yönetim Araçları</h6>
                                    <div class="widget-toggle">+</div>
                                </div>
                                <div class="widget-content">
                                    <ul class="list-unstyled m-none">
                                        <li {{ \App\Http\Controllers\Helper::isActive('inbox') }} >
                                            <a href="">Ziyaretçi Mesajları</a>
                                        </li>
                                        <li><a href="{{ route('logs') }}">Hata Kayıtları</a></li>
                                    </ul>
                                </div>
                            </div>

                            @if(Auth::user()->rank == 1)
                                <li class="nav-parent {{ \App\Http\Controllers\Helper::isActive('admin.index', 'admin.create') }}  ">
                                    <a>
                                        <i class="fa  fa-key" aria-hidden="true"></i>
                                        <span>Kullanıcı İşlemleri</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li class="{{ \App\Http\Controllers\Helper::isActive('admin.index') }}">
                                            <a href="{{ route('admin.index') }}">
                                                Kullanıcı Listesi
                                            </a>
                                        </li>
                                        <li class="{{ \App\Http\Controllers\Helper::isActive('admin.create') }}">
                                            <a href="{{ route('admin.create') }}">
                                                Kullanıcı Ekle
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif


                        </ul>
                    </nav>

                    <hr class="separator" />


                </div>

            </div>

        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>{{ config("app.name") }}</h2>

                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        {!! \App\Http\Controllers\Helper::breadcrumbs() !!}
                    </ol>

                    <a class="sidebar-right-toggle" ></a>
                </div>
            </header>

            <!-- start: page -->
            @yield('content')
            <!-- end: page -->
        </section>
    </div>


</section>

@yield('js')
<!-- Slug -->
</body>
</html>