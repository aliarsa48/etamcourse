@extends('layouts.templateteacher')
@section('content')
<title>{{$profile->name}} | KELASCODE</title>
<br>
        <!-- Static Table Start -->
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img" style="width: 80%; margin-right: 10%; margin-left: 10%;">
                                <img src="/profile/avatar/{{$profile->avatar}}" alt="" style="border-radius: 100%;"/>
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="address-hr">
                                            <p><b><h2>{{$profile->name}}</h2></b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	@if($profile->bio=='')
                                	<div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Bio</b><br /><i>Bio kosong</i></p>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Bio</b><br />{{$profile->bio}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    	<div class="profile-info-inner">
                            <h3 class="box-title">Kelas</h3>
                            <ul class="basic-list">
                            	@foreach($kursus as $k)
                                <li>{{$k->title}}<a href="/teacher/courses/{{$k->id}}"><span class="pull-right label-danger label-1 label">Buka</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <!-- Static Table End -->

@endsection
