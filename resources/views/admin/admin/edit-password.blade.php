@extends('admin.sablon')

@section('meta')
    <title>SDS Danışmanlık | {{ $user->name.' '.$user->surname }} Şifre Güncelleme Sayfası</title>
@endsection

@section('css')
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('pa/HTML/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/summernote/summernote.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/summernote/summernote-bs3.css') }}"/>

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/pnotify/pnotify.custom.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme-custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('pa/HTML/assets/vendor/modernizr/modernizr.js') }}"></script>
@endsection


@section('content')
    <!-- start: page -->
    <section class="body-sign display-center-yukari">
        <div class="center-sign">
            <a href="{{ route('dashboard') }}" class="logo pull-left">
                <img src="{{ asset($user->image) }}" height="54" />
            </a>
            <form class="form-horizontal" action="{{ route('admin.update', ['val' => $user->id]) }}" method="POST" >
                {!! Form::token() !!}
                {!! Form::hidden('_method', 'UPDATE') !!}
                {!! Form::hidden('updatetur', 'pass') !!}

                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Güncelle</h2>
                    </div>
                    <div class="panel-body">
                            <div class="form-group mb-none {{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-sm-12 mb-lg">
                                        <label>Şifre</label>
                                        <input name="password" type="password" class="form-control input-lg" maxlength="12" required />

                                        @if(\Illuminate\Support\Facades\Session::has('pass-hata'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ \Illuminate\Support\Facades\Session::pull('pass-hata') }}
                                                </strong>
                                            </span>
                                        @endif
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('password') }}
                                                </strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-none {{ $errors->has('new_password') || $errors->has('password_confirm') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-sm-12 mb-lg">
                                        <label>Yeni Şifre</label>
                                        <input name="new_password" type="password" class="form-control input-lg"
                                               maxlength="12" required/>

                                        @if ($errors->has('new_password'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('new_password') }}
                                                </strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-12 mb-lg">
                                        <label>Tekrar Yeni Şifre</label>
                                        <input name="password_confirm" type="password" class="form-control input-lg"
                                               id="password_confirm" maxlength="12" required/>
                                        @if ($errors->has('password_confirm'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('password_confirm') }}
                                                </strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="-checkbox-custom -checkbox-default">
                                        <label for="AgreeTerms"><a href="#"></a></label>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">Güncelle</button>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Güncelle</button>
                                </div>
                            </div>

                            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>{{ config('app.name') }}</span>
							</span>

                            <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>


                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- end: page -->
@endsection

@section('js')
    <!-- Vendor -->
    <script src="{{ asset('pa/HTML/assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/summernote/summernote.js') }}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.init.js') }}"></script>
    <!-- Examples -->
    <script src="{{ asset('pa/HTML/assets/javascripts/ui-elements/examples.modals.js') }}"></script>

    <script src="{{ asset('post') }}"></script>
@endsection