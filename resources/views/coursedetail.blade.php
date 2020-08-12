@extends('layouts.app')
<head><title>
{{$kursus->title}} | DeKADE COURSE
</title></head>
@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">
  {{$kursus->title}}</h2>
              <p>Bagaimana membuat aplikasi Hp</p>
            </div>
          </div>
        </div>
      </div> 

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p>
                        <img src="/courses/thumbnails/{{$kursus->thumbnail}}" alt="Image" class="img-fluid">
                    </p>
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                        <h2 class="section-title-underline mb-5">
                            <span>Detail Kursus</span>
                        </h2>
                        
                        <p><strong class="text-black d-block">Pemateri:</strong> {{$kursus->name}}</p>
                        <strong class="text-black d-block">Deskripsi :</strong> {{$kursus->description}}</p>
                        <strong class="text-black d-block">Kuota:</strong> {{$kursus->kuota}}</p>
                        <strong class="text-black d-block">Kuota Tersisa:</strong> {{$kursus->kuota-$kursus->kuotaterisi}}</p>
                        <strong class="text-black d-block">Jumlah Pertemuan :</strong> {{$kursus->jumlahpertemuan}}</p>
                        <strong class="text-black d-block">Waktu Belajar :</strong> {{$kursus->start_date}} s/d {{$kursus->end_date}}</p>
                        <strong class="text-black d-block">Jam Belajar :</strong> {{$kursus->start_time}} s/d {{$kursus->end_time}}</p>
                        <p>
                            
                            <form action="/enroll" method="POST">
                                @csrf
                                <input type="hidden" name="course_id" value="{{$kursus->id}}">
                            @guest
                            @else
                                <input type="hidden" name="student_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="kodeunik" value="{{Auth::user()->id*$kursus->id}}">
                                <input type="hidden" name="kodetagihan" value="{{Auth::user()->id}}-{{$kursus->id}}">
                            @endguest
                                <input type="hidden" name="status" value="belum dibayar">
                                <input type="submit" value="Enroll" class="btn btn-primary rounded-0 btn-lg px-5">

                            </form>
                            
                        </p>
    
                    </div>
            </div>
        </div>
    </div>


@endsection