<!doctype html>
<html class="fixed">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    @yield('meta')
    <meta name="keywords" content="SDS Danışmanlık, İş Hukuku, Sosyal Güvenlik" />
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
                <img src="{{ asset('p/img/sds2-logo.png') }}" height="45" width="190" alt="SDS Danışmanlık Tic.Ltd.Şti." />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            {{--<span class="separator"></span>--}}

            {{--<ul class="notifications">
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu large">
                        <div class="notification-title">
                            <span class="pull-right label label-default">3</span>
                            Tasks
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <p class="clearfix mb-xs">
                                        <span class="message pull-left">Generating Sales Report</span>
                                        <span class="message pull-right text-dark">60%</span>
                                    </p>
                                    <div class="progress progress-xs light">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class="clearfix mb-xs">
                                        <span class="message pull-left">Importing Contacts</span>
                                        <span class="message pull-right text-dark">98%</span>
                                    </p>
                                    <div class="progress progress-xs light">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class="clearfix mb-xs">
                                        <span class="message pull-left">Uploading something big</span>
                                        <span class="message pull-right text-dark">33%</span>
                                    </p>
                                    <div class="progress progress-xs light mb-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="badge">4</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">230</span>
                            Messages
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="{{ asset('pa/HTML/assets/images/!sample-user.jpg" alt="Joseph Doe Junior') }}" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Doe</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="{{ asset('pa/HTML/assets/images/!sample-user.jpg') }}" alt="Joseph Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="{{ asset('pa/HTML/assets/images/!sample-user.jpg') }}" alt="Joe Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="{{ asset('pa/HTML/assets/images/!sample-user.jpg') }}" alt="Joseph Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">3</span>
                            Alerts
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-thumbs-down bg-danger"></i>
                                        </div>
                                        <span class="title">Server is Down!</span>
                                        <span class="message">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-lock bg-warning"></i>
                                        </div>
                                        <span class="title">User Locked</span>
                                        <span class="message">15 minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-signal bg-success"></i>
                                        </div>
                                        <span class="title">Connection Restaured</span>
                                        <span class="message">10/10/2014</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>--}}

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
                            <li class="nav-parent {{ \App\Http\Controllers\Helper::isActive('haber.index', 'haber.create') }} ">
                                <a>
                                    <i class="fa fa-header" aria-hidden="true"></i>
                                    <span>Haber İşlemleri</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('haber.index') }}">
                                        <a href="{{ route('haber.index') }}">
                                            Haber Listesi
                                        </a>
                                    </li>
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('haber.create') }}">
                                        <a href="{{ route('haber.create') }}">
                                            Haber Ekle
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent  {{ \App\Http\Controllers\Helper::isActive('egitim.index', 'egitim.create') }} ">
                                <a>
                                    <i class="fa fa-university" aria-hidden="true"></i>
                                    <span>Eğitim İşlemleri</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('egitim.index') }}">
                                        <a href="{{ route('egitim.index') }}">
                                            Eğitim Listesi
                                        </a>
                                    </li>
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('egitim.create') }}">
                                        <a href="{{ route('egitim.create') }}">
                                            Eğitim Ekle
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent {{ \App\Http\Controllers\Helper::isActive('hizmet.index', 'hizmet.create') }} ">
                                <a>
                                    <i class="fa fa-retweet" aria-hidden="true"></i>
                                    <span>Hizmet İşlemleri</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('hizmet.index') }}">
                                        <a href="{{ route('hizmet.index') }}">
                                            Hizmet Listesi
                                        </a>
                                    </li>
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('hizmet.create') }}">
                                        <a href="{{ route('hizmet.create') }}">
                                            Hizmet Ekle
                                        </a>
                                    </li>
                                </ul>
                            </li>
                              <li class="nav-parent  {{ \App\Http\Controllers\Helper::isActive('sirku.index', 'sirku.create') }} ">
                                <a>
                                    <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                    <span>Sirküler İşlemleri</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('sirku.index') }}">
                                        <a href="{{ route('sirku.index') }}">
                                            Sirkü Listesi
                                        </a>
                                    </li>
                                    <li class="{{ \App\Http\Controllers\Helper::isActive('sirku.create') }}">
                                        <a href="{{ route('sirku.create') }}">
                                            Sirkü Ekle
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
                                            <a href="{{ route('inbox') }}">Ziyaretçi Mesajları</a>
                                        </li>
                                        <li><a href="{{ route('logs') }}">Hata Kayıtları</a></li>
                                    </ul>
                                </div>
                            </div>


                            {{--<li class="nav-parent  {{ \App\Http\Controllers\Helper::isActive('inbox') }} ">--}}
                                {{--<a>--}}
                                    {{--<i class="fa fa-list-ol" aria-hidden="true"></i>--}}
                                    {{--<span>Ziyaretçi Mesajları</span>--}}
                                {{--</a>--}}
                                {{--<ul class="nav nav-children">--}}
                                    {{--<li class="{{ \App\Http\Controllers\Helper::isActive('inbox') }}">--}}
                                        {{--<a href="{{ route('inbox') }}">--}}
                                            {{--Mesaj Listesi--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}


                            {{--<li class="">--}}
                                {{--<a href="{{ route('logs') }}">--}}
                                    {{--<i class="fa fa-warning" aria-hidden="true"></i>--}}
                                    {{--<span>Hata Kayıtları</span>--}}
                                {{--</a>--}}

                            {{--</li>--}}

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
                <h2>SDS Danışmanlık Tic. Ltd. Şti.</h2>

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
{{--<script src="{{ asset('pa/HTML/assets/javascripts/ui-elements/jquery.slugify.js') }}"></script>--}}

</body>
</html>