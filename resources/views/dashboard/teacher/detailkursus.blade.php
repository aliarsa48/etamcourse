@extends('layouts.templateteacher')

@section('content')
<title>{{$kursus->title}} | KELASCODE</title>
<br>
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <h2>{{$kursus->title}}
                                    @if($kursus->status =='active')
                                        <button type="button" class="btn btn-custon-rounded-four btn-xs btn-success">aktif</button>
                                    @elseif($kursus->status =='non-active')
                                        <button type="button" class="btn btn-custon-rounded-four btn-xs btn-warning">tidak aktif</button>
                                    @else
                                        <button type="button" class="btn btn-custon-rounded-four btn-xs btn-danger">sudah selesai</button>
                                    @endif
                                </h2>
                                <hr>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Harga</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: Rp. {{number_format($kursus->price,0,'','.')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Deskripsi</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$kursus->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Kategori</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$kursus->category}}</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Waktu Belajar</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$kursus->start_date}} - {{$kursus->end_date}}</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Jam Belajar</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$kursus->start_time}} - {{$kursus->end_time}}</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Kuota</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$kursus->kuota}} Siswa</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Kuota Terpenuhi</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$hitung}}/{{$kursus->kuota}} Siswa</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Jumlah Pertemuan</b>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <p>: {{$kursus->jumlahpertemuan}} kali pertemuan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <a href="{{'/teacher/courses/'.$kursus->id.'/edit'}}">
                                    <button type="button" class="btn btn-custon-rounded-four btn-warning">Edit</button>
                                </a>
                                <a href="{{'/teacher/courses/'.$kursus->id.'/delete'}}">
                                    <button type="button" class="btn btn-custon-rounded-four btn-danger">Hapus</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="/courses/thumbnails/{{$kursus->thumbnail}}" width="100%"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


							

