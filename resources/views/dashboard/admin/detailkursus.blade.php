@extends('layouts.templateadmin')

@section('content')
<title>{{$id->title}} | KELASCODE</title>

        <div class="data-table-area mg-b-15 mg-t-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <h2>{{$id->title}}
                                    @if($id->status =='active')
                                        <button type="button" class="btn btn-custon-rounded-four btn-xs btn-success">aktif</button>
                                    @elseif($id->status =='non-active')
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
                                        <p>: {{$id->price}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Deskripsi</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$id->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Kategori</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$id->category}}</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Waktu Belajar</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$id->start_date}} - {{$id->end_date}} (

                                            <?php
                                                $datetime1 = new DateTime("{$id->start_date}");
                                                $datetime2 = new DateTime("{$id->end_date}");
                                                $interval = $datetime1->diff($datetime2);
                                                echo $interval->format('%a hari');
                                            ?>
                                            )
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Jam Belajar</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$id->start_time}} - {{$id->end_time}}</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Kuota</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$id->kuota}} Siswa</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Kuota Terisi</b>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <p>: {{$id->kuotaterisi}}/{{$id->kuota}} Siswa</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <b>Jumlah Pertemuan</b>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <p>: {{$id->jumlahpertemuan}} kali pertemuan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons mg-b-30">
                                <a href="{{'/admin/courses/'.$id->id.'/edit'}}">
                                    <button type="button" class="btn btn-custon-rounded-four btn-warning col-lg-6 col-md-6 col-sm-6 col-xs-6" style="width: 49%; float: left;">Edit</button>
                                </a>
                                <a href="{{'/admin/courses/'.$id->id.'/delete'}}">
                                    <button type="button" class="btn btn-custon-rounded-four btn-danger col-lg-6 col-md-6 col-sm-6 col-xs-6" style="width: 49%; float: right;">Hapus</button>
                                </a>
                                @if($id->status =='active')
                                    <form action="/admin/courses/{{$id->id}}/deactivate" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <input type="hidden" name="status" value="non-active">
                                        <input type="submit" class="btn btn-custon-rounded-four btn-warning col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;" value="Non-Aktifkan">
                                    </form>
                                    <form action="/admin/courses/{{$id->id}}/expired" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <input type="hidden" name="status" value="expired">
                                        <input type="submit" class="btn btn-custon-rounded-four btn-danger col-lg-12 col-md-12 col-sm-12 col-xs-12" value="Tandai Sebagai Kadaluarsa">
                                    </form>
                                @elseif($id->status =='non-active')
                                    <form action="/admin/courses/{{$id->id}}/activate" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <input type="hidden" name="status" value="active">
                                        <input type="submit" class="btn btn-custon-rounded-four btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;" value="Aktifkan">
                                    </form>
                                    <form action="/admin/courses/{{$id->id}}/expired" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <input type="hidden" name="status" value="expired">
                                        <input type="submit" class="btn btn-custon-rounded-four btn-danger col-lg-12 col-md-12 col-sm-12 col-xs-12"  value="Tandai Sebagai Kadaluarsa">
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="/courses/thumbnails/{{$id->thumbnail}}" width="100%"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


							

