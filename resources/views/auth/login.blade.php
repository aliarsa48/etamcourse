@extends('layouts.app')
<head><title>Masuk | KELASCODE</title></head>
@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Masuk</h2>
              <p>Masuk ke akun milikmu</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row justify-content-center form-group">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">E-mail</label>
                                <input type="text" id="email" name="email" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="pword">Kata Sandi</label>
                                <input type="password" id="pword" name="password" class="form-control form-control-lg">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" value="Log In" class="btn btn-primary btn-lg px-5">{{ __('Masuk') }}</button>
                            </div>
                            @if (Route::has('password.request'))
                                
                                    <div class="col-8">
                                        <a class="btn btn-link pt-2 float-right" href="{{ route('password.request') }}">
                                            {{ __('Lupa Kata Sandi?') }}
                                        </a>
                                    </div>
                                
                            @endif
                        </div>
                    </div>
                </div>
            </form>
            

          
        </div>
    </div>

@endsection  