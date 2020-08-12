@extends('layouts.templatestudent')

@section('content')
<title>Rincian Penghasilan | DeKADE COURSE</title>

<br>
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <h2>Penghasilan Kelas <b>{{$kursus->title}}</b></h2>
                                <hr>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Jumlah Siswa</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$siswa}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Harga Kelas</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($kursus->price,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Penghasilan</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($penghasilan,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Potongan 20%</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($pajak,0,'','.')}}</p>
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
                                        <p>: Rp. {{number_format($total,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            @if($kursus->statuspencairan=="")
                            <div class="courses-title">
                                <h2>Kirim Permintaan Pencairan</b></h2>
                                <hr>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                        <form action="/teacher/payment/{{$kursus->id}}/request" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="teacher_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="course_id" value="{{$kursus->id}}">
                                            <input type="hidden" name="total" value="{{$total}}">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Bank</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-9">
                                                        <select class="form-control custom-select-value" name="bank" required>
                                                            <option disabled selected>Pilih Bank</option>
                                                            <option value="Mandiri">Mandiri</option>
                                                            <option value="BRI">BRI</option>
                                                            <option value="BNI">BNI</option>
                                                            <option value="Bankaltim">Bankaltim</option>
                                                            <option value="Danamon">Danamon</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="text" class="form-control" name="nama"  required/>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">No. Rekening</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="text" class="form-control" name="norek" required/>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-9">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
                                                        @if(count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                          @foreach ($errors->all() as $error)
                                                          {{ $error }} <br/>
                                                          @endforeach
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="submit" class="btn btn-custon-rounded-two btn-success" value="Kirim">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @elseif($kursus->statuspencairan=='menunggu')
                            <div class="courses-title">
                                <h2>Detail Pencairan Saya</b></h2>
                                <hr>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <b>Bank</b>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <p>: {{$buktipencairan->bank}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <b>Nama</b>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <p>: {{$buktipencairan->nama}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <b>No. Rekening</b>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <p>: {{$buktipencairan->norek}}</p>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <p>Dikonfirmasi pada : {{$buktipencairan->updated_at}}</p>
                                                        <img src="/payment/buktipencairan/{{$buktipencairan->buktipencairan}}">
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


							

