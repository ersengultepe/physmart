@extends('admin.sablon')

@section('meta')
    <title>{{ config("app.name") }} | Makaleler</title>
@endsection

@section('css')
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('pa/HTML/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}"/>

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
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Makale ve Yazılarınız</h2>
        </header>
        <div class="panel-body">
            @if(Session::get('create'))
            <div class="alert alert-success">{{ Session::get('create') }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div>
            @endif
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Foto</th>
                    <th>Başlık</th>
                    <th>Ekleyen</th>
                    <th>Tarih</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slides as $slide)
                    <tr class="">
                        <td> {{ $slide->id }}</td>
                        <td><img style="max-height:50px" src="{{ asset('images/phy/slides/'.$slide->path) }}" alt="{{ $slide->title1 }}" ></td>

                        <td><a href="{{ route('slide.show', ['id'=>$slide->id]) }}">{!! $slide->title1 !!}</a></td>

                        <td >{{ $post->getAdded->name  or '-'}}</td>

                        <td >{{ App\Http\Controllers\Helper::getTime($slide->created_at) }}</td>

                        <td >
                            <form method="get" action="{{ route('slide.edit', ['id' => $slide->id]) }}">
                                {!! Form::hidden('_method', 'PATCH') !!}
                                <input type="submit" value="Düzenle" class="btn btn-warning">
                            </form>
                        </td>
                        <td>
                            {!! Form::open(['url' => route('slide.destroy', ['id' => $slide->id])]) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('Sil', ['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

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

    <!-- Specific Page Vendor -->
    <script src="{{ asset('pa/HTML/assets/vendor/select2/select2.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('pa/HTML/assets/javascripts/tables/examples.datatables.default.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/javascripts/tables/examples.datatables.row.with.details.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/javascripts/tables/examples.datatables.tabletools.js') }}"></script>
@endsection


