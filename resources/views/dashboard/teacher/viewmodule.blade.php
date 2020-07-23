@extends('layouts.templateteacher')

@section('content')
<title>{{$module->judul}} | KELASCODE</title>
<br>
<!-- content -->
		
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
    	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline12-list">

<!-- judul -->
					<div class="main-sparkline12-hd mg-b-15">
	                    <h1>{{$course->title}}</h1> <!-- Judul -->
	                </div>

<!-- judul -->
					<div class="sparkline12-graph">
	                    <div class="basic-login-form-ad">
	                        <div class="row">
	                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                                <div class="all-form-element-inner">
                                        <form action="/addmodule" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            @csrf
                                            @if(count($errors) > 0)
                                                                <div class="alert alert-danger">
                                                        @foreach ($errors->all() as $error)
                                                                  {{ $error }} <br/>
                                                        @endforeach
                                                                </div>
                                                        @endif
	                            			<div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Judul Bab</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="text" class="form-control" name="judul" value="{{$module->judul}}" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                    						<div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">File Modul</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 mg-t-10">
                                                        <div class="file-upload-inner ts-forms">
                                                            <div class="input prepend-small-btn">
                                                                <iframe width="100%" height="450px" src="{{asset('module/'.$module->filemodule)}}" frameborder="0"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           	<div class="form-group-inner">
                                                <input type="hidden" name="course_id" value="{{$course->id}}">
                                            </div>
                                            <div class="form-group-inner mg-t-15">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <a href="/teacher/courses/{{$course->id}}/modules/{{$module->id}}/edit">
                                                            <button type="button" class="btn btn-custon-rounded-two btn-success">Edit</button>
                                                        </a>
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