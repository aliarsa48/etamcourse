@extends('layouts.app')
<head><title>COURSENESIA</title></head>
@section('content')

    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('/images/cover.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Selamat Datang di COURSENESIA</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="intro-section" style="background-image: url('/images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Kamu bisa memulai belajar dengan mudah sekarang</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div></div>

    <div class="mt-5 mb-5">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline">
              <span>Mengapa COURSENESIA</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <img width="100%" src="/images/kurikulum.png">
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <img width="100%" src="/images/pengajar.png">
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <img width="100%" src="/images/praktek.png">
          </div>
        </div>
      </div>
    </div>


    <div class="mb-5">
      <div class="container mb-2">


        <div class="row justify-content-center text-center">
          <div class="col-lg-6 mb-2">
            <h2 class="section-title-underline mb-3">
              <span>Kelas Populer</span>
            </h2>
            <p>Kelas yang sering diminati pelajar</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">

                @foreach($kursus as $k)
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="/course/{{$k->id}}"><img src="/courses/thumbnails/{{$k->thumbnail}}" alt="Image" class="img-fluid"></a>
                      <div class="price">Rp. {{number_format($k->price,0,'','.')}}</div>
                      <div class="category"><h3 style="color: white;"><b>{{$k->title}}</b></h3></div>  
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
                      <p><a href="/course/{{$k->id}}" class="btn btn-primary rounded-0 px-4 oren borderoren">Detail Kelas</a></p>
                    </div>
                  </div>
                @endforeach
      
              </div>
          </div>
        </div>

        
        
      </div>
    </div>

    


    <div class="section-bg style-1" style="background-image: url('/images/course_3.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>Tentang COURSENESIA</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">COURSENESIA adalah adalah platform belajar online yang dikembangkan khusus untuk membantu kamu belajar coding dan lain lain lebih terarah</p>
            <p><a href="{{'about'}}">Read more</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->
  <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-8">
            <h2 class="section-title-underline">
              <span>Apa kata mereka tentang COURSENESIA?</span>
            </h2>
          </div>
        </div>


        <div class="owl-slide owl-carousel">

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/tokyo.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Tokyo</h3>
                <span>Mahasiswa</span>
              </div>
            </div>
            <div>
              <p>&ldquo;Jujur dari pengalaman saya sendiri. Setelah saya mengenal COURSENESIA dan ikut program belajarnya, saya ngerasa buang-buang duit ikut pelatihan programming di tempat lain selama ini. Setelah belajar di COURSENESIA saya terarah banget belajar programmingnya!&rdquo;</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/adam.png" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Adam</h3>
                <span>Pelajar</span>
              </div>
            </div>
            <div>
              <p>Pengalaman belajar di kelas online COURSENESIA sangat baik dan mudah dipahami berkat khualitas video yang bagus dari segi grapic & audio!</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/fikri.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Fikriawan junior</h3>
                <span>Designer</span>
              </div>
            </div>
            <div>
              <p>&ldquo;Penjelasan setiap materi step by step mudah ditangkap ilmunya, enak didengar!&rdquo;</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/farhan.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Muhammad Farhan</h3>
                <span>Dosen</span>
              </div>
            </div>
            <div>
              <p>Tidak menarik, gak ada gambar animenya!</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/putew.jpg" alt="Image" class="img-fluid mr-3">
              <div>
                <h3>Puput</h3>
                <span>Beauty Vlogger</span>
              </div>
            </div>
            <div>
              <p>&ldquo;Materi diberikan benar-benar mengasyikkan&rdquo;</p>
            </div>
          </div>

        </div>
        
      </div>
    </div>
    

    <!--<div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">-->
    <!--        <span class="icon flaticon-mortarboard"></span>-->
    <!--        <h3>Filosofi Kami</h3>-->
    <!--        <p>Tuntut lah ilmu sampai ke KELASCODE.</p>-->
    <!--      </div>-->
    <!--      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">-->
    <!--        <span class="icon flaticon-school-material"></span>-->
    <!--        <h3>Prisnip KELASCODE</h3>-->
    <!--        <p>Memberi kemudahan pada pelajar untuk memahami dan harga murah meriah.</p>-->
    <!--      </div>-->
    <!--      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">-->
    <!--        <span class="icon flaticon-library"></span>-->
    <!--        <h3>Kunci Kesuksesan</h3>-->
    <!--        <p>Mau bekal ilmu untuk Sukses? belajar di KELASCODE.</p>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

@endsection