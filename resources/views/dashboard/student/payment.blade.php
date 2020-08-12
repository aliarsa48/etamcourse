@extends('layouts.templatestudent')

@section('content')
<title>Tagihan | DeKADE COURSE</title>
<br>

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Tagihan Saya</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    @if($tagihan->count())
                                	<table class="table table-bordered">
									  <thead>
									    <tr>
									      <th scope="col">Judul</th>
									      <th scope="col">Category</th>
                                          <th scope="col" width="10%">Status</th>
									      <th scope="col" width="20%">Aksi</th>
									    </tr>
									  </thead>
									  <tbody>
                                        	@foreach($tagihan as $k)
                                            <tr>
                                                <td><a href="{{'/student/payment/'.$k->nomor}}">{{$k->title}}</a></td>
                                                <td>{{$k->category}}</td>
                                                <td>
                                                @if($k->statusenroll=='belum dibayar')
                                                    <button type="button" class="btn btn-custon-rounded-four btn-xs btn-danger">Belum Bayar</button>
                                                @elseif($k->statusenroll=='menunggu verifikasi')
                                                    <button type="button" class="btn btn-custon-rounded-four btn-xs btn-warning">Menunggu Verifikasi</button>
                                                @else
                                                    <button type="button" class="btn btn-custon-rounded-four btn-xs btn-danger">sudah selesai</button>
                                                @endif
                                                </td>
                                                <td>
                                                	<div class="button-ap-list responsive-btn">
                                						<div class="button-style-four btn-mg-b-10">
                                							<a href="{{'/student/payment/'.$k->nomor}}"><button class="btn-custon-rounded-four btn btn-xs btn-success">Konfirmasi Pembayaran</button></a>
                                                                <button type="button" class="btn btn-custon-rounded-four btn-xs btn-danger" data-toggle="modal" data-target="#{{$k->nomor}}">
                                                                Batalkan
                                                                </button>
                                                          




<!-- Modal -->
<div class="modal fade" id="{{$k->nomor}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Konfirmasi</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda ingin membatalkan Kursus ini ?
      </div>
      <div class="modal-footer">
        <a href="{{'/student/payment/'.$k->nomor.'/cancel'}}" class="btn btn-danger">Hapus</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


                                                            </form>
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
                                    <h3 align="center">Tidak Ada Tagihan</h3>
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


							

