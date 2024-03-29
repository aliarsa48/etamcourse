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
                                    <h1>Modul Kelas {{$course->title}}</h1>
                                    <a href="/teacher/courses/{{$course->id}}/modules/add"><button class="btn btn-custon-rounded-four btn-primary">Tambah Modul</button></a>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                	<table class="table table-bordered">
									  <thead>
									    <tr>
                                            <?php $no = 1; ?>
                                            <th scope="col" width="5%">No</th>
									      <th scope="col">Judul</th>
                                          <th scope="col" width="14%">Aksi</th>
									    </tr>
									  </thead>
									  <tbody>
                                        	@foreach($module as $m)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td><a href="{{'/teacher/courses/'.$course->id.'/modules/'.$m->id}}">{{$m->judul}}</a></td>
                                                <td>
                                                	<div class="button-ap-list responsive-btn">
                                						<div class="button-style-four btn-mg-b-10">
                                							<a href="{{'/teacher/courses/'.$course->id.'/modules/'.$m->id}}">
                                    							<button type="button" class="btn btn-custon-rounded-four btn-success btn-xs">Lihat</button>
                                    						</a>
                                    						<a href="{{'/teacher/courses/'.$course->id.'/modules/'.$m->id.'/edit'}}">
                                   								<button type="button" class="btn btn-custon-rounded-four btn-warning btn-xs">Edit</button>
                                   							</a>
                                   							<a href="{{'/teacher/courses/'.$course->id.'/modules/'.$m->id.'/delete'}}">
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