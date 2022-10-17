@extends('admin.sablon')

@section('css')

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:600,400,300' rel='stylesheet'>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme-custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('pa/HTML/assets/vendor/modernizr/modernizr.js') }}"></script>

    <script>
        (function(w,d,s,g,js,fs){
            g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
            js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
            js.src='https://apis.google.com/js/platform.js';
            fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
        }(window,document,'script'));
    </script>

@endsection

@section('content')
    <!-- start: page -->

    <div class="row">

        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <section class="panel panel-featured-left panel-featured-primary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-default">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4><div id="active-users-container"></div></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <section class="panel panel-featured-left panel-featured-secondary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-default">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Makale Sayısı</h4>
                                        <div class="info">
                                            <strong class="amount">100</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(Görüntüle)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <section class="panel panel-featured-left panel-featured-tertiary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-default">
                                        <i class=" fa fa-header"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Haber Sayısı</h4>
                                        <div class="info">
                                            <strong class="amount">3238</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(Görüntüle)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <section class="panel panel-featured-left panel-featured-quartenary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-default">
                                        <i class="fa  fa-mortar-board"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Eğitim Sayısı</h4>
                                        <div class="info">
                                            <strong class="amount">34</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(Görüntüle)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- end: page -->


   <div class="row" >
       <div style="display: none" class="col-md-12">
           <section class="panel">

               <div class="panel-body">

                   <!-- Flot: Basic -->

                   <div style="display: none" id="embed-api-auth-container"></div>
                   <div style="display: none" id="view-selector-container"></div>

                   <h3 style="display: none" id="view-name"></h3>
                   <style>
                       div[id^="chart"] {
                           width: 500px;
                           height: 300px;
                       }
                   </style>

               </div>
           </section>
       </div>
       <div class="col-md-6">
           <section class="panel">
               <div class="panel-body">

                   <!-- Flot: Basic -->
                   <div class="Chartjs">
                       <h3>Bu Hafta ve Geçen Hafta <br><small>(Oturum Sayısı)</small></h3>
                       <figure class="Chartjs-figure" id="chart-1-container"></figure>
                       <ol class="Chartjs-legend" id="legend-1-container">

                       </ol>
                   </div>

               </div>
           </section>
       </div>
       <div class="col-md-6">
           <section class="panel">
               <div class="panel-body">

                   <!-- Flot: Curves -->
                   <div class="Chartjs">
                       <h3>Bu Yıl ve Geçen Yıl <br>
                           <small>(Kullanıcı Sayısı)</small></h3>
                       <figure class="Chartjs-figure" id="chart-2-container"></figure>
                       <ol class="Chartjs-legend" id="legend-2-container"></ol>
                   </div>

               </div>
           </section>
       </div>
   </div>

   <div class="row">
       <div class="col-md-6">
           <section class="panel">
               <div class="panel-body">

                   <!-- Flot: Bars -->
                   <div class="Chartjs">
                       <h3>En Çok Kullanılan Tarayıcılar <br>
                           <small>(Sayfa Görüntülenme Sayısına Göre)</small></h3>
                       <figure class="Chartjs-figure" id="chart-3-container"></figure>
                       <ol class="Chartjs-legend" id="legend-3-container"></ol>
                   </div>

               </div>
           </section>
       </div>
       <div class="col-md-6">
           <section class="panel">
               <div class="panel-body">
                   <!-- Flot: Pie -->
                   <div class="Chartjs">
                       <h3>En Çok Ziyaretçi Gelen Ülkeler <br>
                           <small>(Oturum Sayısına Göre)</small></h3>
                       <figure class="Chartjs-figure" id="chart-4-container"></figure>
                       <ol class="Chartjs-legend" id="legend-4-container"></ol>
                   </div>

               </div>
           </section>
       </div>
   </div>

<script src="{{ asset('google/moment.js') }}"></script>
<script src="{{ asset('google/chartjs.js') }}"></script>
<script src="{{ asset('google/view-selector2.js') }}"></script>
<script src="{{ asset('google/date-range-selector.js') }}"></script>
<script src="{{ asset('google/active-users.js') }}"></script>
<link rel="stylesheet" href="{{ asset('google/chartjs-visualizations.css') }}">

<script>
    function Analitik(parameters) {
        var veriler = { client_secret: 'J6BKLj6QKBp6sh8NA54OSKQw',
            grant_type: 'refresh_token',
            refresh_token: '1/yzHAZPxnraKvrL8N7mGuT-UUWIuXGbFDaQ68vL6pK8k',
            client_id: '380856430328-b3etveieu416jg45ji7tmvbkpbqu6k5k.apps.googleusercontent.com' };
        $.ajax({
            type: "POST",
            url: "https://www.googleapis.com/oauth2/v4/token",
            contentType: "application/x-www-form-urlencoded",
            data: veriler,
            dataType: "json",
            success: function (veriler) {
                console.log(veriler);

                gapi.analytics.auth.authorize({
                    serverAuth: {
                        "access_token": veriler.access_token,
                        "expires_in": veriler.expires_in,
                        "token_type": veriler.token_type

                    },
                    container: 'embed-api-auth-container',
                    clientid: '380856430328-b3etveieu416jg45ji7tmvbkpbqu6k5k.apps.googleusercontent.com',
                    clientsecret: 'J6BKLj6QKBp6sh8NA54OSKQw',

                });

            }, error: function () {

            }

        });
    }

    gapi.analytics.ready(function() {

        Analitik();
        /*gapi.analytics.auth.authorize({
            container: 'embed-api-auth-container',
            clientid: '380856430328-b3etveieu416jg45ji7tmvbkpbqu6k5k.apps.googleusercontent.com',
        });*/

        var activeUsers = new gapi.analytics.ext.ActiveUsers({
            ids : 'ga:134311449',
            container: 'active-users-container',
            pollingInterval: 5
        });

        activeUsers.once('success', function() {
            var element = this.container.firstChild;
            var timeout;

            this.on('change', function(data) {
                var element = this.container.firstChild;
                var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
                element.className += (' ' + animationClass);

                clearTimeout(timeout);
                timeout = setTimeout(function() {
                    element.className =
                        element.className.replace(/ is-(increasing|decreasing)/g, '');
                }, 3000);
            });
        });

        var viewSelector = new gapi.analytics.ext.ViewSelector2({
            container: 'view-selector-container',
        })
            .execute();

        viewSelector.on('viewChange', function(data) {
            var title = document.getElementById('view-name');
            title.innerHTML = data.property.name + ' (' + data.view.name + ')';

            activeUsers.set(data).execute();

            renderWeekOverWeekChart(data.ids);
            renderYearOverYearChart(data.ids);
            renderTopBrowsersChart(data.ids);
            renderTopCountriesChart(data.ids);
        });

        function renderWeekOverWeekChart(ids) {

            // Adjust `now` to experiment with different days, for testing only...
            var now = moment(); // .subtract(3, 'day');

            var thisWeek = query({
                'ids': 'ga:134311449',
                'dimensions': 'ga:date,ga:nthDay',
                'metrics': 'ga:sessions',
                'start-date': moment(now).subtract(1, 'day').day(0).format('YYYY-MM-DD'),
                'end-date': moment(now).format('YYYY-MM-DD')
            });

            var lastWeek = query({
                'ids': 'ga:134311449',
                'dimensions': 'ga:date,ga:nthDay',
                'metrics': 'ga:sessions',
                'start-date': moment(now).subtract(1, 'day').day(0).subtract(1, 'week')
                    .format('YYYY-MM-DD'),
                'end-date': moment(now).subtract(1, 'day').day(6).subtract(1, 'week')
                    .format('YYYY-MM-DD')
            });

            Promise.all([thisWeek, lastWeek]).then(function(results) {

                var data1 = results[0].rows.map(function(row) { return +row[2]; });
                var data2 = results[1].rows.map(function(row) { return +row[2]; });
                var labels = results[1].rows.map(function(row) { return +row[0]; });

                labels = labels.map(function(label) {
                    return moment(label, 'YYYYMMDD').format('ddd');
                });

                var data = {
                    labels : labels,
                    datasets : [
                        {
                            label: 'Geçen Hafta',
                            fillColor : "rgba(220,220,220,0.5)",
                            strokeColor : "rgba(220,220,220,1)",
                            pointColor : "rgba(220,220,220,1)",
                            pointStrokeColor : "#fff",
                            data : data2
                        },
                        {
                            label: 'Bu Hafta',
                            fillColor : "rgba(151,187,205,0.5)",
                            strokeColor : "rgba(151,187,205,1)",
                            pointColor : "rgba(151,187,205,1)",
                            pointStrokeColor : "#fff",
                            data : data1
                        }
                    ]
                };

                new Chart(makeCanvas('chart-1-container')).Line(data);
                generateLegend('legend-1-container', data.datasets);
            });
        }

        function renderYearOverYearChart(ids) {

            // Adjust `now` to experiment with different days, for testing only...
            var now = moment(); // .subtract(3, 'day');

            var thisYear = query({
                'ids': 'ga:134311449',
                'dimensions': 'ga:month,ga:nthMonth',
                'metrics': 'ga:users',
                'start-date': moment(now).date(1).month(0).format('YYYY-MM-DD'),
                'end-date': moment(now).format('YYYY-MM-DD')
            });

            var lastYear = query({
                'ids': 'ga:134311449',
                'dimensions': 'ga:month,ga:nthMonth',
                'metrics': 'ga:users',
                'start-date': moment(now).subtract(1, 'year').date(1).month(0)
                    .format('YYYY-MM-DD'),
                'end-date': moment(now).date(1).month(0).subtract(1, 'day')
                    .format('YYYY-MM-DD')
            });

            Promise.all([thisYear, lastYear]).then(function(results) {
                var data1 = results[0].rows.map(function(row) { return +row[2]; });
                var data2 = results[1].rows.map(function(row) { return +row[2]; });
                var labels = ['Oca','Şub','Mar','Nis','May','Haz',
                    'Tem','Agu','Eyl','Eki','Kas','Ara'];

                for (var i = 0, len = labels.length; i < len; i++) {
                    if (data1[i] === undefined) data1[i] = null;
                    if (data2[i] === undefined) data2[i] = null;
                }

                var data = {
                    labels : labels,
                    datasets : [
                        {
                            label: 'Geçen Yıl',
                            fillColor : "rgba(220,220,220,0.5)",
                            strokeColor : "rgba(220,220,220,1)",
                            data : data2
                        },
                        {
                            label: 'Bu Yıl',
                            fillColor : "rgba(151,187,205,0.5)",
                            strokeColor : "rgba(151,187,205,1)",
                            data : data1
                        }
                    ]
                };

                new Chart(makeCanvas('chart-2-container')).Bar(data);
                generateLegend('legend-2-container', data.datasets);
            })
                .catch(function(err) {
                    console.error(err.stack);
                })
        }

        function renderTopBrowsersChart(ids) {

            query({
                'ids': 'ga:134311449',
                'dimensions': 'ga:browser',
                'metrics': 'ga:pageviews',
                'sort': '-ga:pageviews',
                'max-results': 5
            })
                .then(function(response) {

                    var data = [];
                    var colors = ['#4D5360','#949FB1','#D4CCC5','#E2EAE9','#F7464A'];

                    response.rows.forEach(function(row, i) {
                        data.push({ value: +row[1], color: colors[i], label: row[0] });
                    });

                    new Chart(makeCanvas('chart-3-container')).Doughnut(data);
                    generateLegend('legend-3-container', data);
                });
        }

        function renderTopCountriesChart(ids) {
            query({
                'ids': 'ga:134311449',
                'dimensions': 'ga:country',
                'metrics': 'ga:sessions',
                'sort': '-ga:sessions',
                'max-results': 5
            })
                .then(function(response) {

                    var data = [];
                    var colors = ['#4D5360','#949FB1','#D4CCC5','#E2EAE9','#F7464A'];

                    response.rows.forEach(function(row, i) {
                        data.push({
                            label: row[0],
                            value: +row[1],
                            color: colors[i]
                        });
                    });

                    new Chart(makeCanvas('chart-4-container')).Doughnut(data);
                    generateLegend('legend-4-container', data);
                });
        }

        function query(params) {
            return new Promise(function(resolve, reject) {
                var data = new gapi.analytics.report.Data({query: params});
                data.once('success', function(response) { resolve(response); })
                    .once('error', function(response) { reject(response); })
                    .execute();
            });
        }

        function makeCanvas(id) {
            var container = document.getElementById(id);
            var canvas = document.createElement('canvas');
            var ctx = canvas.getContext('2d');

            container.innerHTML = '';
            canvas.width = container.offsetWidth;
            canvas.height = container.offsetHeight;
            container.appendChild(canvas);

            return ctx;
        }

        function generateLegend(id, items) {
            var legend = document.getElementById(id);
            legend.innerHTML = items.map(function(item) {
                var color = item.color || item.fillColor;
                var label = item.label;
                return '<li><i style="background:' + color + '"></i>' + label + '</li>';
            }).join('');
        }

        Chart.defaults.global.animationSteps = 60;
        Chart.defaults.global.animationEasing = 'easeInOutQuart';
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.maintainAspectRatio = false;

    });

</script>
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
    <script>
        $('div').mouseover(function () {
            $('.ActiveUsers').css('background-color', 'white');
            $('.summary-icon').css('background', 'rgba(151,187,205,0.5)');
        });

    </script>
@endsection