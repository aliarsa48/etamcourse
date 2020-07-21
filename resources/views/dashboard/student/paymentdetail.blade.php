@extends('layouts.templatestudent')

@section('content')
<title>Rincian Tagihan | KELASCODE</title>
<br>
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <h2>{{$detailtagihan->title}}</h2>
                                <hr>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Kode Tagihan</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$detailtagihan->kodetagihan}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Harga Kelas</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($detailtagihan->price,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Kode Unik</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$detailtagihan->kodeunik}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Total Tagihan</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($detailtagihan->price+$detailtagihan->kodeunik,0,'','.')}}</p>
                                    </div>
                                </div>
                                @if($detailtagihan->statusenroll=='belum dibayar')
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                    <form action="/student/payment/{{$detailtagihan->nomor}}/confirm" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <input type="hidden" name="status" value="menunggu verifikasi">
                                        <label>Upload Bukti Pembayaran :</label>
                                        <input type="file" name="buktipembayaran" class="mg-b-15" required>
                                        <input type="submit" class="btn btn-custon-rounded-four btn-success" value="Konfirmasi Pembayaran">
                                        <a href="/student/payment/{{$detailtagihan->nomor}}/cancel">
                                        <button type="button" class="btn btn-custon-rounded-four btn-danger">Batalkan Kelas</button>
                                    </a>
                                    </form>
                                    </div>
                                </div>
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            @if($detailtagihan->statusenroll=='belum dibayar')
                            <div class="row">
                                    <h4 align="center">Harap Transfer Sebesar :</h4>
                                    <h2 align="center"><b>Rp. {{number_format($detailtagihan->price+$detailtagihan->kodeunik,0,'','.')}},-</b></h2>
                                    <h4 align="center">Bank Mandiri - 16192392932</h4>
                                    <h5 align="center">a/n <b>Kelasku</b></h5>
                            </div>
                            @else
                            <div class="courses-title">
                                <h2>Bukti Pembayaran Anda :</h2>
                                <hr>
                                <img style="max-height: 300px;" src="/enrolls/buktipembayaran/{{$detailtagihan->buktipembayaran}}">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


							

