@extends('layouts.templateteacher')

@section('content')
<title>Tambah Kelas Baru | KELASCODE</title>
<br>
<!-- content -->
		
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
    	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline12-list">

<!-- judul -->
					<div class="main-sparkline12-hd mg-b-15">
	                    <h1>Tambahkan Kelas Baru</h1> <!-- Judul -->
	                </div>

<!-- judul -->
					<div class="sparkline12-graph">
	                    <div class="basic-login-form-ad">
	                        <div class="row">
	                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                                <div class="all-form-element-inner">
	                                	<form action="/addcourse" method="POST" enctype="multipart/form-data">
	                                		@csrf
	                                		<input type="hidden" name="teacher_id" value="{{ Auth::user()->id }}">
	                            			<div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Judul Kelas</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="text" class="form-control" name="title" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Deskripsi Kelas</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <textarea class="form-control" rows="4" name="description" /></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Kategori</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="category">
																<option value="Pengembangan Web">Pengembangan Web</option>
																<option value="Database">Database</option>
																<option value="Jaringan">Jaringan</option>
																<option value="Desain">Desain</option>
																<option value="Marketing">Marketing</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    						<div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Gambar Thumbnail</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 mg-t-10">
                                                        <div class="file-upload-inner ts-forms">
                                                            <div class="input prepend-small-btn">
                                                                <input type="file" name="thumbnail" id="prepend-small-btn" placeholder="no file selected" class="col-9">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Waktu Belajar</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
					                                    <div class="form-group data-custon-pick data-custom-mg" id="data_5">
					                                        <div class="input-daterange input-group" id="datepicker">
					                                            <input type="date" class="form-control" name="start_date"/>
					                                            <span class="input-group-addon">sampai</span>
					                                            <input type="date" class="form-control" name="end_date"/>
					                                        </div>
					                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Jam Belajar Kelas</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
					                                    <div class="form-group data-custon-pick data-custom-mg" id="data_5">
					                                        <div class="input-daterange input-group" id="datepicker">
					                                            <input type="time" class="form-control" name="start_time"/>
					                                            <span class="input-group-addon">sampai</span>
					                                            <input type="time" class="form-control" name="end_time"/>
					                                        </div>
					                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Kuota</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="number" name="kuota" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Jumlah Pertemuan</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="number" name="jumlahpertemuan" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Harga</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                        <input type="number" name="price" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                           	<div class="form-group-inner">
                                                <input type="hidden" name="status" value="non-active">
                                            </div>
                                            <div class="form-group-inner mg-t-15">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                                    	<input type="submit" class="btn btn-custon-rounded-two btn-success" value="Simpan">
                                                    </div>
                                                </div>
                                            </div>
	                                	</form>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end content -->

@endsection