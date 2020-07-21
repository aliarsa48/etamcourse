@extends('layouts.templateadmin')

@section('content')
<title>Pemateri | KELASCODE</title>
<br>

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd mg-b-15">
                                <div class="main-sparkline13-hd">
                                    <h1>Daftar Pemateri</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    @if($pemateri->count())
                                    <p>Total : <b>{{$pemateri->total()}}</b></p>
                                	<table class="table table-bordered">
									  <thead>
									    <tr>
                                          <th>No.</th>
									      <th scope="col">Nama</th>
									      <th scope="col">E-Mail</th>
                                          <th scope="col">Tanggal Bergabung</th>
									    </tr>
									  </thead>
									  <tbody>
                                        	@foreach($pemateri as $u)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td><a href="{{'/profile/'.$u->id}}">{{$u->name}}</a></td>
                                                <td>{{$u->email}}</td>
                                                <td>{{$u->created_at}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
									</table>
                                    {{ $pemateri->links() }}
                                    @else
                                    <br>
                                    <br>
                                    <h3 align="center">Tidak Ada Pemateri</h3>
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


							

