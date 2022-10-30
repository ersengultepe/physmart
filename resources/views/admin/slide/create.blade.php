@extends('admin.sablon')

@section('meta')
    <title>{{ config("app.name") }} | Slayt Ekleme Sayfası</title>
@endsection

@section('css')
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('pa/HTML/assets/vendor/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/font-awesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}"/>

    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/summernote/summernote.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/summernote/summernote-bs3.css') }}"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme.css') }}"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/skins/default.css') }}"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme-custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('pa/HTML/assets/vendor/modernizr/modernizr.js') }}"></script>
@endsection

@section('content')
    <div class="col-md-12">
        <form action="{{ route('slide.store') }}" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="slug" value="">
            {!! Form::token() !!}
            {!! Form::hidden('user_id', Auth::user()->id) !!}
            {!! Form::hidden('durum', 1) !!}

            <section class="panel">
                @if(Session::get('hata'))
                    <div class="alert alert-danger">{{ Session::get('hata') }}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>
                @endif
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Slayt Ekleme</h2>
                    <p class="panel-subtitle">
                        Ana sayfada gözükecek slaytları ekleyiniz.
                    </p>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="title1">Başlık 1<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="title1" class="form-control"  value="{{ old('title1') }}"
                                   placeholder="Örn: HELLO, THIS IS">

                            @if ($errors->has('title1'))
                                <label for="title" class="error">{{ $errors->first('title1') }}</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="title2">Başlık 2<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="title2" class="form-control"  value="{{ old('title2') }}"
                                   placeholder="Örn: PORTO HTML TEMPLATE">

                            @if ($errors->has('title2'))
                                <label for="title" class="error">{{ $errors->first('title2') }}</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="title3">Başlık 3<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="title3" class="form-control"  value="{{ old('title3') }}"
                                   placeholder="Örn: Trusted by over 40,000 satisfied users.    ">

                            @if ($errors->has('title3'))
                                <label for="title" class="error">{{ $errors->first('title3') }}</label>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="btnTitle">Buton Başlığı<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="btnTitle" class="form-control"  value="{{ old('btnTitle') }}"
                                   placeholder="Örn: Get Started Now!">

                            @if ($errors->has('btnTitle'))
                                <label for="title" class="error">{{ $errors->first('btnTitle') }}</label>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="btnHref">Buton Linki<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="btnHref" class="form-control"  value="{{ old('btnHref') }}"
                                   placeholder="Örn: http://www.physmart.com.tr/product">

                            @if ($errors->has('btnHref'))
                                <label for="title" class="error">{{ $errors->first('btnHref') }}</label>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Foto<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="file" name="path" class="form-control">
                            @if ($errors->has('path'))
                                <label for="image" class="error">{{ $errors->first('path') }}</label>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="btnHref">Kullanıcı<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="user" class="form-control"  value="{{ Auth::user()->name.' '.Auth::user()->surname }}" disabled>
                            <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                            @if ($errors->has('btnHref'))
                                <label for="title" class="error">{{ $errors->first('btnHref') }}</label>
                            @endif
                        </div>
                    </div>

                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            {!! Form::submit('Kaydet', ['class'=>'btn btn-primary']) !!}
                            {!! Form::reset('Formu Temizle', ['class'=>'btn btn-default']) !!}
                        </div>
                    </div>
                </footer>
            </section>
            </form>
    </div>
    <?php $errors = ''; ?>
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

    <script src="{{ asset('pa/HTML/assets/javascripts/custom/makale-edit.js') }}"></script>

    <script>
        $('input[name=slug]').slugify('input[name=title]');
    </script>

@endsection