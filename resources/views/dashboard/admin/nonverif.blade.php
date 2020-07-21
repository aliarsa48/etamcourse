@extends('layouts.templateadmin')

@section('content')
<title>Kursus Belum Di Verifikasi | KELASCODE</title>
<br>

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Kelas Yang Tidak Aktif</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    @if($kursus->count())
                                    <p>Total : <b>{{$kursus->total()}}</b></p>
                                	<table class="table table-bordered">
									  <thead>
									    <tr>
                                            <th scope="col">No.</th>
									      <th scope="col">Judul</th>
									      <th scope="col">Category</th>
									      <th scope="col">Harga</th>
									      <th scope="col">Nama Pemateri</th>
									      <th scope="col" width="20%">Aksi</th>
									    </tr>
									  </thead>
									  <tbody>
                                        	@foreach($kursus as $k)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td><a href="{{'/admin/courses/'.$k->id}}">{{$k->title}}</a></td>
                                                <td>{{$k->category}}</td>
                                                <td>Rp. {{$k->price}}</td>
                                                <td>{{$k->name}}
                                                </td>
                                                <td>
                                                	<div class="button-ap-list responsive-btn">
                                						<div class="button-style-four btn-mg-b-10">
                                							<a href="{{'/admin/courses/'.$k->id}}">
                                    							<button type="button" class="btn btn-custon-rounded-four btn-primary">Lihat</button>
                                    						</a>
                                    						<a href="{{'/admin/courses/'.$k->id.'/edit'}}">
                                   								<button type="button" class="btn btn-custon-rounded-four btn-warning">Edit</button>
                                   							</a>
                                   							<a href="{{'/admin/courses/'.$k->id.'/delete'}}">
                                    							<button type="button" class="btn btn-custon-rounded-four btn-danger">Hapus</button>
                                    						</a>
                            							</div>
                            						</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
									</table>
                                    {{$kursus->links()}}
                                    @else
                                    <br>
                                    <br>
                                    <h3 align="center">Tidak Ada Data</h3>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


							

