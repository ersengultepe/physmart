@extends('admin.sablon')

@section('meta')
    <title>SDS Danışmanlık | Gelen Mesajlar</title>
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

            <h2 class="panel-title">Ziyaretçilerden Gelen Mesaj Listesi</h2>

        </header>
        <div class="panel-body">

            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                <tr>
                    <th>No </th>
                    <th>Adı Soyadı </th>
                    <th>Telefon </th>
                    <th>Eposta Adresi</th>
                    <th>Mesaj</th>
                    <th>Tarih</th>

                </tr>
                </thead>
                <tbody>
                @foreach($mesajlar as $mesaj)
                    <tr class="">
                        <td>
                            {{ $mesaj->id }}
                        </td>

                        <td>
                            {{ $mesaj->ad_soyad }}
                        </td>

                        <td>
                            {{ $mesaj->telefon }}
                        </td>

                        <td>
                            {{ $mesaj->email }}
                        </td>

                        <td>
                            {!! $mesaj->mesaj !!}
                        </td>

                        <td>
                            {{ \Carbon\Carbon::parse($mesaj->created_at)->day.' '.
                            \App\Http\Controllers\Helper::turkceTarih(Carbon\Carbon::parse($mesaj->created_ad)).' '.
                            \Carbon\Carbon::parse($mesaj->created_ad)->year }}
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


