@extends('nav.app')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <h4>{{$hitungkasus}}</h4>
                                        <p>TOTAL KASUS</p>   
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <h4>{{$hitungperempuan}}</h4>
                                        <p>Korban Perempuan</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <h4>{{$hitunglaki}}</h4>
                                        <p>Korban Laki-Laki</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                        <h4>{{$hitungkorban}}</h4>
                                        <p>Total Korban</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Total Kasus Setiap Kecamatan
                                    </div>
                                    <div class="card-body"><div id="myChart" width="100%" height="40"></div></div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kecamatan</th>
                                            <th>Total Korban</th>
                                            <th>Korban Laki-laki</th>
                                            <th>Korban Perempuan</th>
                                            <th>Rata-Rata Umur</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kecamatan</th>
                                            <th>Total Korban</th>
                                            <th>Korban Laki-laki</th>
                                            <th>Korban Perempuan</th>
                                            <th>Rata-Rata Umur</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($kecamatancount as $count)
                                        <tr style="text-align:center">
                                            <td>{{$count->kecamatan}}</td>
                                            <td>{{$count->total}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>-->
                    </div>
                </main>
                @include('nav.footer')
                <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
                    Highcharts.chart('myChart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Kasus Setiap Kecamatan'
            },
            xAxis: {
                categories: {!!json_encode($categories)!!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Kasus'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Total Kasus',
                data: {{json_encode($total)}}

            }]
        });
        </script>
            </div>
        </div>

@endsection

