@extends('layouts.templateadmin')

@section('content')
<title>Pembayaran Diterima | KELASCODE</title>
<br>

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Pembayaran Menunggu Verifikasi</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    @if($tagihan->count())
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                            <th>Nomor Tagihan</th>
                                            <th scope="col">Nama Murid</th>
                                            <th scope="col">Judul Kelas</th>
                                            <th scope="col" width="10%">Total Tagihan</th>
                                            <th scope="col" width="20%">Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach($tagihan as $k)
                                            <tr>
                                                <td>{{$k->kodetagihan}}</td>
                                                <td><a href="{{'/student/payment/'.$k->nomor}}">{{$k->name}}</a></td>
                                                <td>{{$k->title}}</td>
                                                <td>Rp. {{number_format($k->price+$k->kodeunik,0,'','.')}}</td>
                                                <td>
                                                    <div class="button-ap-list responsive-btn">
                                                        <div class="button-style-four btn-mg-b-10">
                                                            <button type="button" class="btn btn-custon-rounded-four btn-xs btn-primary" data-toggle="modal" data-target="#buktipembayaran{{$k->nomor}}">Lihat Bukti
                                                            </button>
                                                            <button type="button" class="btn btn-custon-rounded-four btn-xs btn-danger" data-toggle="modal" data-target="#{{$k->nomor}}">Tolak
                                                            </button>
                                                          




<!-- Modal -->
                        <!-- div id="buktipembayaran{{$k->nomor}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <img src="/enrolls/buktipembayaran/{{$k->buktipembayaran}}">
                                    </div>
                                    <div class="modal-footer">
                                        <a href="/admin/payment/{{$k->nomor}}/accept" class="danger-md"><b>Terima</b></a>
                                        <a data-dismiss="modal" href="#" class="danger-md">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div id="buktipembayaran{{$k->nomor}}" class="modal modal-edu-general Customwidth-popup-WarningModal PrimaryModal-bgcolor fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>
                                        <h3 style="color: white;">Konfirmasi ?</h3>
                                        <img src="/enrolls/buktipembayaran/{{$k->buktipembayaran}}">
                                    </div>
                                    <div class="modal-footer footer-modal-admin warning-md">
                                        <a href="/admin/payment/{{$k->nomor}}/accept" class="warning-md">Terima</a>
                                        <a data-dismiss="modal" href="#" class="danger-md">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        Apakah anda ingin membatalkan Kelas ini ?
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


                            

