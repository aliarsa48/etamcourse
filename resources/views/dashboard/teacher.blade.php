@extends('layouts.templateteacher')

@section('content')
<title>Dashboard | DeKADE COURSE</title>
<br>
        <!-- Static Table Start -->
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="widgets-programs-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30">
                                <div class="panel-body">
                                    @foreach($totalkursus as $total)
                                    <div class="stats-title pull-left">
                                        <h4>Total Kelas Anda</h4>
                                    </div>
                                    <div class="stats-icon pull-right">
                                        <i class="educate-icon educate-apps"></i>
                                    </div>
                                    <div class="m-t-xl widget-cl-1">
                                        <br>
                                        <h1 class="text-success">{{$total->total}}</h1>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30">
                                <div class="panel-body">
                                    <div class="stats-title pull-left">
                                        <h4>Jumlah Siswa</h4>
                                    </div>
                                    <div class="stats-icon pull-right">
                                        <i class="educate-icon educate-professor"></i>
                                    </div>
                                    <div class="m-t-xl widget-cl-2">
                                        <br>
                                        <h1 class="text-info">{{$hitungsiswa}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                <div class="panel-body">
                                    <div class="stats-title pull-left">
                                        <h4>Penghasilan</h4>
                                    </div>
                                    <div class="stats-icon pull-right">
                                        <i class="educate-icon educate-department"></i>
                                    </div>
                                    <div class="m-t-xl widget-cl-3">
                                        <br>
                                        <h1 class="text-warning">Rp. {{number_format($jumsubtotal*80/100,0,'','.')}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Static Table End -->
        <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection