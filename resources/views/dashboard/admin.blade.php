@extends('layouts.templateadmin')

@section('content')
<title>Dashboard | DeKADE COURSE</title>
<br>
        <!-- Static Table Start -->
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="widgets-programs-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
                                <div class="panel-body" style="">
                                    <div class="stats-title pull-left">
                                        <h4>Pemateri Terdaftar</h4>
                                    </div>
                                    <div class="stats-icon pull-right mg-b-15">
                                        <h1 class="text-success">{{$totalpengajar}}</h1>
                                    </div>
                                    <a href="/admin/teacher"><button class="btn btn-primary" style="width: 100%">Rincian</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
                                <div class="panel-body" style="">
                                    <div class="stats-title pull-left">
                                        <h4>Siswa Terdaftar</h4>
                                    </div>
                                    <div class="stats-icon pull-right mg-b-15">
                                        <h1 class="text-success">{{$totalmurid}}</h1>
                                    </div>
                                    <a href="/admin/student"><button class="btn btn-success" style="width: 100%">Rincian</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
                                <div class="panel-body" style="">
                                    <div class="stats-title pull-left">
                                        <h4>Pembayaran Terbaru</h4>
                                    </div>
                                    <div class="stats-icon pull-right mg-b-15">
                                        <h1 class="text-success">{{$pembayaranbaru}}</h1>
                                    </div>
                                    <a href="/admin/payment"><button class="btn btn-warning" style="width: 100%">Rincian</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
                                <div class="panel-body" style="">
                                    <div class="stats-title pull-left">
                                        <h4>Permintaan Pencairan</h4>
                                    </div>
                                    <div class="stats-icon pull-right mg-b-15">
                                        <h1 class="text-success">{{$permintaanpencairan}}</h1>
                                    </div>
                                    <a href="/admin/payment/request"><button class="btn btn-info" style="width: 100%">Rincian</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
                                <div class="panel-body" style="">
                                    <div class="stats-title pull-left">
                                        <h4>Kelas Aktif</h4>
                                    </div>
                                    <div class="stats-icon pull-right mg-b-15">
                                        <h1 class="text-success">{{$kursusaktif}}</h1>
                                    </div>
                                    <a href="/admin/courses"><button class="btn btn-primary" style="width: 100%">Rincian</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
                                <div class="panel-body" style="">
                                    <div class="stats-title pull-left">
                                        <h4>Kelas Menunggu Verifikasi</h4>
                                    </div>
                                    <div class="stats-icon pull-right mg-b-15">
                                        <h1 class="text-success">{{$kursusmenungguverifikasi}}</h1>
                                    </div>
                                    <a href="/admin/courses/nonverif"><button class="btn btn-success" style="width: 100%">Rincian</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
                                <div class="panel-body" style="">
                                    <div class="stats-title pull-left">
                                        <h4>Kelas Kadaluarsa</h4>
                                    </div>
                                    <div class="stats-icon pull-right mg-b-15">
                                        <h1 class="text-success">{{$kursusexpired}}</h1>
                                    </div>
                                    <a href=""><button class="btn btn-info" style="width: 100%">Rincian</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Static Table End -->

@endsection