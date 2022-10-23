<!doctype html>
<html class="fixed">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="description" content="{{ config("app.name") }} | Yönetici Girişi "/>
    <meta name="keywords" content="{{ config("app.keywords") }}">
    <meta name="author" content="ersen gültepe">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('pa/HTML/assets/vendor/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/font-awesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme.css') }}"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/skins/default.css') }}"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme-custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('pa/HTML/assets/vendor/modernizr/modernizr.js') }}"></script>
</head>
<body>

<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            <img src="{{ asset('p/img/sds2-logo.png') }}" height="65" width="130" alt="{{ config("app.name") }}"/>
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> GİRİŞ</h2>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ url('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group mb-lg">
                        <label>E-posta</label>
                        <div class="input-group input-group-icon">
                            <input name="email" type="text" class="form-control input-lg" maxlength="150" required autofocus/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-user"></i>
                                </span>
                            </span>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group mb-lg {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="clearfix">
                            <label class="pull-left">Şifre</label>
                            <a href="{{ url('password/reset') }}" class="pull-right">Şifreni mi Unuttun?</a>
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="password" type="password" class="form-control input-lg" maxlength="12" required autofocus/>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="-checkbox-custom -checkbox-default">
                                <label for="RememberMe"></label>
                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary hidden-xs">Giriş</button>
                            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Giriş</button>
                        </div>
                    </div>

                    <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                        <span>{{ config('app.name') }}</span>
                    </span>

                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Telif Hakkı 2014. Tüm Hakları Saklıdır.</p>
    </div>
</section>
<!-- end: page -->


<!-- Vendor -->
<script src="{{ asset('pa/HTML/assets/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('pa/HTML/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('pa/HTML/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('pa/HTML/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('pa/HTML/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('pa/HTML/assets/javascripts/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('pa/HTML/assets/javascripts/theme.custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('pa/HTML/assets/javascripts/theme.init.js') }}"></script>
</body>
</html>