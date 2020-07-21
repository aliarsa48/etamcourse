@extends('layouts.templatestudent')

@section('content')
<title>{{$kelas->title}} | KELASCODE</title>
<br>
        <div class="library-book-area mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                            <div class="single-review-st-hd">
                                <h1>{{$kelas->title}}</h1>
                                <hr>
                                @if($kelas->link=="")
                                <h2>Kelas Belum Dibuka/Link Belum di Update</h2>
                                @else
                                <h2>Link Pertemuan ke {{$kelas->pertemuanke}}/{{$kelas->jumlahpertemuan}}:</h2>
                            </div>
                            <div class="single-review-st-text">
                                <a target="_blank" href="//{{$kelas->link}}"><button class="btn btn-md btn-success">Buka Kelas</button></a>
                                @endif
                            </div>
                            @if($kelas->link=="")
                            @else
                            <p>Diperbarui 
                                <?php

                                        $terakhir = strtotime($kelas->updated_at);
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
                             oleh Admin</p>
                            @endif
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-cards-item">
                            <div class="single-product-image">
                                <a href="#"><img src="/profile/sampul.jpg" alt=""></a>
                            </div>
                            <div class="single-product-text">
                                <img src="/profile/avatar/{{$kelas->foto}}" alt="">
                                <h4><a class="cards-hd-dn" href="#">{{$kelas->teachername}}</a></h4>
                                <h5>Web Designer & Developer</h5>
                                <p class="ctn-cards">Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

@endsection