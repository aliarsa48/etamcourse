@extends('layouts.app')
<head><title>Daftar | KELASCODE</title></head>
@section('content')
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <p>Daftarkan Akunmu Sekarang !</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="{{'/'}}">Beranda</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Daftar</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
         <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">{{ __('Nama Lengkap') }}</label>
                            <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                        </div>
                      
                        <div class="col-md-12 form-group">
                            <label for="email">{{ __('E-Mail') }}</label>
                            <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label for="password">{{ __('Kata Sandi') }}</label>
                            <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="password-confirm">{{ __('Konfirmasi Kata Sandi') }}</label>
                            <input type="password" id="password-confirm" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                        </div>

                       <div class="col-md-12 form-group {{ $errors->has('level') ? ' has-error' : '' }} ">
                            <label>Daftar Sebagai</label>

                                <select name="level" class="form-control form-control-lg">
                                    <option value="pengajar">Pengajar</option>
                                    <option value="murid">Murid</option>
                                </select>
                        </div>
                    </div>



        
                    <div class="row">
                        <div class="col-12">
                            @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                      {{ $error }} <br/>
                            @endforeach
                                    </div>
                            @endif
                            <input type="submit" value="Daftar" class="btn btn-primary btn-lg px-5 mt-2">
                        </div>
                    </div>
                </div>
            </div>
        </form>    

          
        </div>
    </div>

@endsection
