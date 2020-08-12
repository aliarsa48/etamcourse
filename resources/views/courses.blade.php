@extends('layouts.app')
<head><title>Kelas | DeKADE COURSE</title></head>
@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Kelas</h2>
              <p>Kelas Yang Tersedia Untukmu</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="site-section">
        <div class="container">
            <div class="row">
                
                    @foreach($courses as $k)
                    <div class="col-lg-4 col-md-6 mb-4">
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="/course/{{$k->id}}"><img src="/courses/thumbnails/{{$k->thumbnail}}" alt="Image" class="img-fluid"></a>
                      <div class="price">Rp. {{number_format($k->price,0,'','.')}}</div>
                      <div class="category"><h3 style="color: black;"><b>{{$k->title}}</b></h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <h2>{{$k->description}}</h2>
                      <p><a href="/course/{{$k->id}}" class="btn btn-primary rounded-0 px-4">Detail Kelas</a></p>
                    </div>
                  </div>
                  </div>
                @endforeach
                

                




            </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Filosi Kami</h3>
              <p>Tuntut lah ilmu sampai ke KELASKU</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Prisnip DeKADE COURSE</h3>
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