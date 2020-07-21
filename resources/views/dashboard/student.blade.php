@extends('layouts.templatestudent')

@section('content')
<title>Dashboard | KELASCODE</title>
<br>
        @include('sweet::alert')
        <!-- Static Table Start -->
        <div class="courses-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="dashboard/img/courses/laravel.jpg" alt=""></a>
                                <h2>Membangun RESTful API dengan Laravel 6</h2>
                            </div>
                            <div class="courses-alaltic"> 
                               <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span><font><b>Rp. </b>450.000,00</font></span>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Durasi:</b> 45 menit x 45 video</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Pemateri:</b> Puput Rindiani</p>
                            </div>
                            <div class="product-buttons">
                                <button type="button" class="button-default cart-btn">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="dashboard/img/courses/web.jpg" alt=""></a>
                                <h2>Web Design</h2>
                            </div>
                            <div class="courses-alaltic"> 
                               <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span><font><b>Rp. </b>350.000,00</font></span>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Durasi:</b> 43 menit x 45 video</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Pemateri:</b> Aminah Husein</p>
                            </div>
                            <div class="product-buttons">
                                <button type="button" class="button-default cart-btn">Read More</button>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="dashboard/img/courses/html.jpg" alt=""></a>
                                <h2>Mengusai html dalam satu minggu</h2>
                            </div>
                            <div class="courses-alaltic"> 
                               <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span><font><b>Rp. </b>150.000,00</font></span>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Durasi:</b> 45 menit x 45 video</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Pemateri:</b> Nugraha Pratama</p>
                            </div>
                            <div class="product-buttons">
                                <button type="button" class="button-default cart-btn">Read More</button>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="dashboard/img/courses/ps.jpg" alt=""></a>
                                <h2>Mengusai Photoshop</h2>
                            </div>
                            <div class="courses-alaltic"> 
                               <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span><font><b>Rp. </b>550.000,00</font></span>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Durasi:</b> 50 menit x 45 video</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Pemateri:</b> Indra</p>
                            </div>
                            <div class="product-buttons">
                                <button type="button" class="button-default cart-btn">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Static Table End -->
@endsection