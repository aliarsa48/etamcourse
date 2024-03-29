@extends('layouts.templatestudent')

@section('content')
<title>Dashboard | DeKADE COURSE</title>

<br>
        <div class="data-table-area mg-b-15" style="margin-top: -3px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 13px;">
                        <div class="courses-inner">
                            <h2 style="margin-bottom: -5px;">{{$course->title}}</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="">
                        <div class="courses-inner">
                            <table class="" border="0" width="100%">
                                @foreach($judulbab as $j=>$jb)
                                    <tr>
                                        <td width='100%'><a href="{{$j+1}}">
                                            <button class="btn btn-custon-four  
                                                @if($idbab == $j+1)
                                                    btn-success
                                                @else
                                                    btn-primary
                                                @endif
                                            " style="width: 100%; border:0; border-radius:0">{{$jb->judul}}</button></a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="">
                        <div class="courses-inner">
                            @if($idbab == 1)
                            <a href="/student/courses/{{$course->id}}/module/{{$z+1}}"><button class="btn btn-primary" style="margin-bottom: 5px; float: right">Bab Selanjutnya</button></a>
                            @elseif($idbab == $terakhir)
                            <a href="/student/courses/{{$course->id}}/module/{{$z-1}}"><button class="btn btn-primary" style="margin-bottom: 5px; float: left">Bab Sebelumnya</button></a>
                            @else
                            <a href="/student/courses/{{$course->id}}/module/{{$z-1}}"><button class="btn btn-primary" style="margin-bottom: 5px; float: left">Bab Sebelumnya</button></a>
                            <a href="/student/courses/{{$course->id}}/module/{{$z+1}}"><button class="btn btn-primary" style="margin-bottom: 5px; float: right">Bab Selanjutnya</button></a>
                            @endif
                            <iframe src="/module/{{$pagebab[$i+1]['filemodule']}}" frameborder="0" style="height:450px; width: 100%"></iframe>
                        </div>
                    </div>


                        {{-- <div class="courses-inner res-mg-b-30" style="padding-bottom: 30px">
                            <div class="col-md-3">
                                <table class="">
                                    @foreach($idbab as $bab)
                                        <td><a href="{{$bab->id}}">{{$bab->judul}}</a></td>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-9">
                                @foreach($idbab as $b)
                                    <iframe src="/module/{{$b->filemodule}}" frameborder="0" width="100%" height="500px"></iframe>
                                @endforeach
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
@endsection


							

