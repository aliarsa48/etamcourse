@extends('layouts.templateadmin')

@section('content')
<title>Kotak Pesan | DeKADE COURSE</title>
<br>

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Kontak Pesan</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                	<table class="table table-bordered">
									  <thead>
									    <tr>
									      <th scope="col" width="14%">Nama Depan</th>
									      <th scope="col" width="14%">Nama Belakang</th>
									      <th scope="col" width="18%">Email</th>
                                          <th scope="col" width="14%">Nomor Telepon</th>
                                          <th scope="col" width="30%">Pesan</th>
                                          <th scope="col" width="8%">Aksi</th>                                          

									    </tr>
									  </thead>
									  <tbody>
                            @foreach($contact as $p)
                            <tr>
                                <td>{{ $p->firstname }}</td>
                                <td>{{ $p->lastname }}</td>
                                <td >{{ $p->emailaddress }}</td>
                                <td>{{ $p->telnumber }}</td>
                                <td>{{ $p->message }}</td>
                                <td><a href="mailto:{{$p->emailaddress}}" target="_blank"><button type="button" class="btn btn-primary">Balas</button></a></td>

                            </tr>
                            @endforeach
                                        </tbody>
									</table>

    <br/>
    Halaman : {{ $contact->currentPage() }} <br/>
    Jumlah Data : {{ $contact->total() }} <br/>
    Data Per Halaman : {{ $contact->perPage() }} <br/>
 
 
    {{ $contact->links() }}                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


							

