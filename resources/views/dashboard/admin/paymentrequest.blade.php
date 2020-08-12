@extends('layouts.templateadmin')

@section('content')
<title>Permintaan Pencairan | DeKADE COURSE</title>
<br>

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Permintaan Pencairan</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    @if($payment->count())
                                	<table class="table table-bordered">
									  <thead>
									    <tr>
									      <th scope="col">Judul</th>
									      <th scope="col">Nama Pemateri</th>
                                          <th scope="col">Total</th>
                                          <th scope="col">Bank</th>
                                          <th scope="col" width="8%">Atas Nama</th>
                                          <th scope="col">Nomor Rekening</th>
                                          <th scope="col">Tanggal Request</th>
									      <th scope="col" width="14%">Aksi</th>
									    </tr>
									  </thead>
									  <tbody>

                                        	@foreach($payment as $k)
                                            <tr>
                                                <td><a href="{{'/admin/payment/request/'.$k->id}}">{{$k->title}}</a></td>
                                                <td>{{$k->name}}</td>
                                                <td>{{$k->total}}</td>
                                                <td>{{$k->bank}}</td>
                                                <td>{{$k->nama}}</td>
                                                <td>{{$k->norek}}</td>
                                                <td>{{$k->created_at}}</td>
                                                <td>
                                                	<div class="button-ap-list responsive-btn">
                                						<div class="button-style-four btn-mg-b-10">
                                							<a href="{{'/admin/payment/request/'.$k->id}}">
                                    							<button type="button" class="btn btn-custon-rounded-four btn-xs btn-primary">Lihat</button>
                                    						</a>
                            							</div>
                            						</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
									</table>
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


							

