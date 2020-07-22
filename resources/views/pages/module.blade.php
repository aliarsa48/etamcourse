@extends('layouts.templateteacher')

@section('content')

<br>
<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Modul Kelas {{$id->title}}</h1>
                                    <a href="/teacher/courses/{{$id->id}}/modules/add"><button class="btn btn-custon-rounded-four btn-primary">Tambah Modul</button></a>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                	<table class="table table-bordered">
									  <thead>
									    <tr>
                                            <?php $no = 1; ?>
                                            <th scope="col">No</th>
									      <th scope="col">Judul</th>
									      <th scope="col">Modul</th>
                                          <th scope="col">Aksi</th>
									    </tr>
									  </thead>
									  <tbody>
                                        	@foreach($module as $m)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td><a href="{{'/teacher/courses/module'.$m->module_id}}">{{$m->judul}}</a></td>
                                                <td><iframe src="{{asset('/module/'.$m->filemodule)}}" frameborder="0"></iframe></td>
                                                <td>
                                                	<div class="button-ap-list responsive-btn">
                                						<div class="button-style-four btn-mg-b-10">
                                							<a href="{{'/teacher/courses/'.$m->id}}">
                                    							<button type="button" class="btn btn-custon-rounded-four btn-primary btn-xs">Lihat</button>
                                    						</a>
                                    						<a href="{{'/teacher/courses/'.$m->id.'/edit'}}">
                                   								<button type="button" class="btn btn-custon-rounded-four btn-warning btn-xs">Edit</button>
                                   							</a>
                                   							<a href="{{'/teacher/courses/'.$m->id.'/delete'}}">
                                    							<button type="button" class="btn btn-custon-rounded-four btn-danger btn-xs">Hapus</button>
                                    						</a>
                            							</div>
                            						</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection