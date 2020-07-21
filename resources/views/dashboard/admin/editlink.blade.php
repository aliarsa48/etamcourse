@extends('layouts.templateadmin')

@section('content')
<!-- content -->
<title>Perbarui Link | KELASCODE</title>
		
<div class="basic-form-area mg-b-15 mg-t-15">
    <div class="container-fluid">
    	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline12-list">

<!-- judul -->
					<div class="main-sparkline12-hd mg-b-15">
	                    <h1>Perbarui Link Kelas</h1> <!-- Judul -->
	                </div>

<!-- judul -->
					<div class="sparkline12-graph">
	                    <div class="basic-login-form-ad">
	                        <div class="row">
	                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                                <div class="all-form-element-inner">
	                                	<form action="/admin/courses/{{$id->id}}/updatelink/update" method="POST" enctype="multipart/form-data">
	                                		{{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <h2>{{$id->title}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @if($id->pertemuanke=="")
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Link Pertemuan ke {{$id->pertemuanke+1}}</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="text" class="form-control" name="link" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
	                            			<div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Link Pertemuan ke {{$id->pertemuanke}}</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="text" class="form-control" value="{{$id->link}}" disabled=""/>
                                                        <p style="margin-top: 3px; margin-bottom: -5px; float: right;">
                                                        <?php

                                                            $terakhir = strtotime($id->updated_at);
                                                            $sekarang = time();
                                                            $diff = $sekarang-$terakhir;
                                                            //echo $terakhir.'<br>';
                                                            $selisih = floor($diff / (60 * 60 * 24)).' hari yang lalu';
                                                            if ($selisih == "0 hari yang lalu") {
                                                                echo "baru saja diedit hari ini";
                                                            } else {
                                                                echo 'terakhir di edit '.$selisih;
                                                            }

                                                        ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Link Pertemuan ke {{$id->pertemuanke+1}}</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="text" class="form-control" name="link" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="form-group-inner mg-t-15">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        @if(count($errors) > 0)
                                                                <div class="alert alert-danger">
                                                        @foreach ($errors->all() as $error)
                                                                  {{ $error }} <br/>
                                                        @endforeach
                                                                </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner mg-t-15">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                    	<input type="submit" class="btn btn-custon-rounded-two btn-success" value="Simpan">
                                                    </div>
                                                </div>
                                            </div>
	                                	</form>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end content -->

@endsection