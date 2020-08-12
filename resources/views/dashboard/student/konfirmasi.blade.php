@extends('layouts.templateteacher')

@section('content')
<title>Konfirmasi | DeKADE COURSE</title>
<br>
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <h2>Detail Tagihan</h2>
                            <hr>
                            <p>Rp.{{$bayar->price+$bayar->kodeunik}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="/courses/thumbnails/{{$bayar->thumbnail}}" width="100%"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


							

