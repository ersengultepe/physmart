@extends('admin.sablon')

@section('css')
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('pa/HTML/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/summernote/summernote.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/summernote/summernote-bs3.css') }}"/>
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

            <form class="form-horizontal" method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {!! Form::hidden('rank', 2) !!}
                {!! Form::hidden('status', 1) !!}
                {!! Form::hidden('adder', Auth::user()->id) !!}
                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Kaydet</h2>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group mb-lg {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>Ad</label>
                                <input name="name" type="text" class="form-control input-lg" value="{{ old('name') }}" />

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-lg {{ $errors->has('surname') ? ' has-error' : '' }}">
                                <label>Soyad</label>
                                <input name="surname" type="text" class="form-control input-lg" value="{{ old('surname') }}"/>
                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-lg {{ $errors->has('degree') ? ' has-error' : '' }}">
                                <label>Unvan</label>
                                <input name="degree" type="text" class="form-control input-lg" value="{{ old('degree') }}"/>

                                @if ($errors->has('degree'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('degree') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>E-posta adresi</label>
                                <input name="email" type="email" class="form-control input-lg" value="{{ old('email') }}"/>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group mb-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Fotoğraf</label>

                                <input type="file" name="image" class="form-control">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif

                            </div>


                            <div class="form-group mb-none {{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-sm-6 mb-lg">
                                        <label>Şifre</label>
                                        <input name="password" type="password" class="form-control input-lg" maxlength="12" required />

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 mb-lg">
                                        <label>Tekrar Şifre</label>
                                        <input name="password_confirm" type="password" class="form-control input-lg" id="password-confirm" maxlength="12" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="-checkbox-custom -checkbox-default">

                                        <label for="AgreeTerms"><a href="#"></a></label>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">Kaydet</button>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Kaydet</button>
                                </div>
                            </div>

                            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>{{ config('app.name') }}</span>
							</span>

                            <p class="text-center text-muted mt-md mb-md">&copy; Telif Hakkı 2014. Tüm Hakları Saklıdır.</p>

                        </form>
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
@endsection