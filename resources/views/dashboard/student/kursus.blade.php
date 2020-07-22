@extends('layouts.templatestudent')

@section('content')
<title>Dashboard | KELASCODE</title>

<br>
        <div class="data-table-area mg-b-15" style="margin-top: -3px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 13px;">
                        <div class="courses-inner">
                            <h2 style="margin-bottom: -5px;">Kelas Yang Akan dan Sedang Berlangsung</h2>
                        </div>
                    </div>
                    @if($mycourse->count())
                    @foreach($mycourse as $k)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="/student/courses/{{$k->nomor}}"><img src="/courses/thumbnails/{{$k->thumbnail}}" alt=""></a>
                                <h2>{{$k->title}}</h2>
                                <hr>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span><b>Pemateri :</b> {{$k->teachername}}</p>
                                <p><b>Diperbarui :</b>
                                    <?php

                                        $terakhir = strtotime($k->updated_at);
                                        $sekarang = time();
                                        $diff = $sekarang-$terakhir;
                                                        //echo $terakhir.'<br>';
                                        $selisih = floor($diff / (60 * 60 * 24)).' hari yang lalu';
                                        if ($selisih == "0 hari yang lalu") {
                                            echo "hari ini";
                                        } else {
                                            echo $selisih;
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="product-buttons">
                                <a href="/student/courses/{{$k->nomor}}/module">
                                    <button type="button" class="button-default cart-btn" style="width: 100%;">Buka Kelas</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="courses-inner">
                            <h4 align="center">Anda Belum Memiliki Kelas Apapun</h4>
                            <br>
                            <div align="center">
                            <a href="/course">
                                <button type="button" class="btn btn-primary" >Lihat Kelas Yang Tersedia</button>
                            </a>
                            <div>
                        </div>
                    </div>
                    @endif
                </div>
                <br>
                <hr>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 13px;">
                        <div class="courses-inner">
                            <h2 style="margin-bottom: -5px;">Kelas Yang Sudah Selesai</h2>
                        </div>
                    </div>
                    @if($mycourse->count())
                    @foreach($finishedcourse as $f)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <img src="/courses/thumbnails/{{$f->thumbnail}}" alt="">
                                <h2>{{$f->title}}</h2>
                                <hr>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span><b>Pemateri:</b> {{$f->teachername}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="courses-inner">
                    <h4 align="center">Anda Belum Memiliki Kelas Yang Sudah Selesai</h4>
                    </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
@endsection


							

