@extends('layouts.templateteacher')

@section('content')
<title>Riwayat Pencairan | DeKADE COURSE</title>
<br>
<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Kelas Saya</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                	<table class="table table-bordered">
									  <thead>
									    <tr>
									      <th scope="col">Judul</th>
									      <th scope="col">Harga</th>
                                          <th scope="col">Jumlah Murid</th>
                                          <th scope="col">Pertemuan</th>
                                          <th scope="col">Total Penghasilan</th>
                                          <th scope="col">Waktu Pencairan</th>
									      <th scope="col" width="20%">Aksi</th>
									    </tr>
									  </thead>
									  <tbody>
                                        	@foreach($kursus as $k)
                                            <tr>
                                                <td><a href="{{'/teacher/payment/'.$k->id}}">{{$k->title}}</a></td>
                                                <td>Rp. {{number_format($k->price,0,'','.')}}</td>
                                                <td>{{$k->kuotaterisi}}/{{$k->kuota}}</td>
                                                <td>{{$k->pertemuanke}}/{{$k->jumlahpertemuan}}</td>
                                                <td>Rp. {{($k->price*$k->kuotaterisi)*80/100}}</td>
                                                <td>
                                                    {{$k->updated_at}}
                                                </td>
                                                <td>
                                                    @if($k->buktipencairan=='')
                                                    <div class="button-ap-list responsive-btn">
                                                        <div class="button-style-four btn-mg-b-10">
                                                            <a href="{{'/teacher/payment/'.$k->id}}">
                                                                <button type="button" class="btn btn-custon-rounded-four btn-primary btn-xs">Cairkan ke Rekening</button>
                                                            </a>
                                                            <a href="{{'/teacher/courses/'.$k->id.'/edit'}}">
                                                                <button type="button" class="btn btn-custon-rounded-four btn-warning btn-xs">Edit</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @else
                                                        <a href="/payment/buktipencairan/{{$k->buktipencairan}}" target="_blank"><button type="button" class="btn btn-custon-rounded-four btn-success btn-xs">Lihat Bukti Pencairan</button>
                                                            </a>
                                                    @endif
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


							

