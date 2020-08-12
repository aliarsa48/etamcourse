@extends('layouts.app')
<head><title>Marketing | DeKADE COURSE</title></head>
@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Marketing</h2>
              <p>Kursus Marketing Yang Tersedia Untukmu</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="site-section">
        <div class="container">
            <div class="row">
                @if($kursus->count())
                    @foreach($kursus as $k)
                      <div class="col-lg-4 col-md-6 mb-4">
                      <div class="course-1-item">
                        <figure class="thumnail">
                          <a href="/course/{{$k->id}}"><img src="/courses/thumbnails/{{$k->thumbnail}}" alt="Image" class="img-fluid"></a>
                          <div class="price">Rp. {{number_format($k->price,0,'','.')}}</div>
                          <a href="/course/{{$k->id}}"><div class="category"><h3>{{$k->title}}</h3></div></a>
                        </figure>
                        <div class="course-1-content pb-4">
                          <h2>{{$k->description}}</h2>
                          <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                          </div>
                          <p class="desc mb-4">Saat kamu mendesain, lakukan dengan sepenuh hati sehingga kamu menghasilkan desain terbaik, yang dapat membuat orang berkata ‘wow’ saat mereka melihat desainmu..</p>
                          <p><a href="/course/{{$k->id}}" class="btn btn-primary rounded-0 px-4">Ikuti Kursus Ini</a></p>
                        </div>
                      </div>
                      </div>
                    @endforeach
                @else
                <div class="col-lg-12 col-md-12 mb-12">
                <br>
                <br>
                <br>
                <h2 align="center">Tidak Ada Kursus di Kategori Ini</h2>
                <br>
                <br>
                <br>
                </div>
                @endif

                




            </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('/images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Filosi Kami</h3>
              <p>Tuntut lah ilmu sampai ke KELASKU</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Prisnip KELASKU</h3>
              <p>Memberi kemudahan pada pelajar untuk memahami dan harga murah meriah.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Kunci Kesuksesan</h3>
              <p>Mau bekal ilmu untuk Sukses? belajar di KELASKU.</p>
            </div>
          </div>
        </div>

       </div>


@endsection