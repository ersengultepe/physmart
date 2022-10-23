@extends('admin.sablon')

@section('meta')
    <title>{{ config("app.name") }} | Kategori Ekleme Sayfası</title>
@endsection

@section('css')
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('pa/HTML/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.css') }}" />

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
    <div class="col-md-12">
        {!! Form::open(['url' => route('category.store')]) !!}
        <input type="hidden" name="slug" value="">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Kategori Ekleme</h2>
                <p class="panel-subtitle">
                    Makalelerin Kategorilerini Belirleyebilirsiniz.
                </p>
            </header>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Kategori Adı<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="" required="">
                    </div>

                    @if ($errors->has('title'))
                        <label for="" class="error">{{ $errors->first('title') }}</label>
                    @endif
                </div>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                        {!! Form::submit('Kaydet', ['class'=>'btn btn-primary']) !!}
                    </div>
                </div>
            </footer>
        </section>
        {!! Form::close() !!}
    </div>
@endsection

@section('js')
    <!-- Vendor -->
    <script src="{{ asset('pa/HTML/assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.init.js') }}"></script>

    <script>
        $('input[name=slug]').slugify('input[name=title]');
    </script>
@endsection