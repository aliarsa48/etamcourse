@extends('layouts.templateadmin')

@section('content')
<title>Pencairan | DeKADE COURSE</title>
<br>
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <h2>Penghasilan Kelas <b>{{$pencairan->title}}</b></h2>
                                <hr>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Nama Pemateri</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$pencairan->kuotaterisi}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Jumlah Siswa</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$pencairan->kuotaterisi}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Harga Kelas</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($pencairan->price,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Penghasilan</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($pencairan->total,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Potongan 20%</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($pencairan->total*20/100,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Total Penghasilan</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($pencairan->total*80/100,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            @if($pencairan->buktipencairan=="")
                            <div class="courses-title">
                                <h2>Kirim Permintaan Pencairan</b></h2>
                                <hr>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                        
                                        <form action="/admin/payment/request/{{$pencairan->id}}/kirimpencairan" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Kirim Bukti Pencairan</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="file" class="form-control" name="buktipencairan"  required/>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-2 col-sm-2 col-xs-12">
                                                    </div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-9">
                                                @if(count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                          {{ $error }} <br/>
                                                @endforeach
                                                        </div>
                                                @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-2 col-sm-2 col-xs-12">
                                                    </div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="submit" class="btn btn-custon-rounded-two btn-success" value="Kirim">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="courses-title">
                                <h2>Bukti Pembayaran</b></h2>
                                <hr>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-2 col-sm-2 col-xs-12">
                                                        <p>Dikonfirmasi pada : {{$pencairan->updated_at}}</p>
                                                        <img src="/payment/buktipencairan/{{$pencairan->buktipencairan}}">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


							

