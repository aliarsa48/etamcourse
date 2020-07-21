@extends('layouts.app')
<head><title>Kontak</title></head>
@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Kontak</h2>
              <p>Jika ada yang ingin ditanya bisa kirim pesan email dibawah ini.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

                <form class="form-style-1 placeholder-1" method="post" action="/contact/send">
                  @csrf
            <div class="row">                  
                <div class="col-md-6 form-group">
                    <label for="fname">Nama depan</label>
                    <input required name="firstname" type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Nama belakang</label>
                    <input required name="lastname" type="text" id="lname" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email</label>
                    <input required name="emailaddress" type="text" id="eaddress" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Nomor telepon</label>
                    <input required="" name="telnumber" type="text" id="tel" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Pesan</label>
                    <textarea  name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            @if(count($errors) > 0)
                                                                <div class="alert alert-danger">
                                                        @foreach ($errors->all() as $error)
                                                                  {{ $error }} <br/>
                                                        @endforeach
                                                                </div>
                                                        @endif

            <div class="row">
                <div class="col-12">
                    <input required type="submit" value="kirim" class="btn btn-primary btn-lg px-5" data-toggle="modal" data-target="#kirim">
                </div>
            </div>       
          </form>
        </div>
    </div>



    <div  class="modal" id="kirim" tabindex="=1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body"> 
                  <p> Pesan terkirim</p>
                </div> 
            </div> 
        </div> 
    </div>


    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Filosofi Kami</h3>
              <p>Tuntutlah Ilmu sampai ke KELASKU</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Prinsip KELASKU</h3>
              <p>Memberi kemudahan pada pelajar untuk memahami dan harga murah meriah.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Kunci Kesuksesan</h3>
              <p>Mau bekal ilmu untuk Sukses? belajar di KELASKU..</p>
            </div>
          </div>
        </div>
      </div>


@endsection