@extends('layouts.templateadmin')

@section('content')
<title>Semua Kursus | DeKADE COURSE</title>
<br>

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Semua Kelas</h1>
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
									      <th scope="col">Nama Pemateri</th>
                                          <th scope="col">Jumlah Murid</th>
                                          <th scope="col">Pertemuan</th>
                                          <th scope="col" width="8%">Link Kelas</th>
                                          <th scope="col">Terakhir di Edit</th>
                                          <th scope="col" width="10%">Status</th>
									      <th scope="col" width="14%">Aksi</th>
									    </tr>
									  </thead>
									  <tbody>
                                        	@foreach($kursus as $k)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td><a href="{{'/admin/courses/'.$k->id}}">{{$k->title}}</a></td>
                                                <td>{{$k->name}}</td>
                                                <td>
                                                    @if($k->kuotaterisi >= $k->kuota)
                                                        {{$k->kuotaterisi}}/{{$k->kuota}}
                                                    @elseif($k->kuotaterisi < $k->kuota)
                                                        <div style="color: red;"> {{$k->kuotaterisi}}/{{$k->kuota}}</div>
                                                    @endif
                                                </td>
                                                <td>{{$k->pertemuanke}} dari {{$k->jumlahpertemuan}}</td>
                                                <td>
                                                    <a href="//{{$k->link}}">
                                                        <button type="button" class="btn btn-custon-rounded-four btn-xs btn-info">Buka</button>
                                                    </a>
                                                    <a href="/admin/courses/{{$k->id}}/updatelink">
                                                        <button type="button" class="btn btn-custon-rounded-four btn-xs btn-primary">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php

                                                        $terakhir = strtotime($k->updated_at);
                                                        $sekarang = time();
                                                        $diff = $sekarang-$terakhir;
                                                        //echo $terakhir.'<br>';
                                                        $selisih = floor($diff / (60 * 60 * 24)).' hari yang lalu';
                                                        if ($selisih == "0 hari yang lalu") {
                                                            echo "hari ini";
                                                        } else {
                                                            echo $selisih;
                                                        }
                                                    ?>
                                                    </td>
                                                <td>
                                                @if($k->status =='active' && $k->pertemuanke < $k->jumlahpertemuan)
                                                    <button type="button" class="btn btn-custon-rounded-four btn-xs btn-success">aktif</button>
                                                @elseif($k->status =='onverification' && $k->pertemuanke < $k->jumlahpertemuan)
                                                    <button type="button" class="btn btn-custon-rounded-four btn-xs btn-warning">menunggu verifikasi</button>
                                                @elseif($k->status =='non-active' && $k->pertemuanke < $k->jumlahpertemuan)
                                                    <button type="button" class="btn btn-custon-rounded-four btn-xs btn-warning">tidak aktif</button>
                                                @elseif($k->pertemuanke >= $k->jumlahpertemuan)
                                                    <button type="button" class="btn btn-custon-rounded-four btn-xs btn-danger">sudah selesai</button>
                                                @endif
                                                </td>
                                                <td>
                                                	<div class="button-ap-list responsive-btn">
                                						<div class="button-style-four btn-mg-b-10">
                                							<a href="{{'/admin/courses/'.$k->id}}">
                                    							<button type="button" class="btn btn-custon-rounded-four btn-xs btn-primary">Lihat</button>
                                    						</a>
                                    						<a href="{{'/admin/courses/'.$k->id.'/edit'}}">
                                   								<button type="button" class="btn btn-custon-rounded-four btn-xs btn-warning">Edit</button>
                                   							</a>
                                   							<a href="{{'/admin/courses/'.$k->id.'/delete'}}">
                                    							<button type="button" class="btn btn-custon-rounded-four btn-xs btn-danger">Hapus</button>
                                    						</a>
                            							</div>
                            						</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
									</table>
                                    {{ $kursus->links() }}
                                    @else
                                    <br>
                                    <br>
                                    <h3 align="center">Tidak Ada Data</h3>
                                    <br>
                                    <br>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


							

