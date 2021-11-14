@extends('layouts.app')
@section('content')
<div class="container py-5 h-100 border-3">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="{{ asset('img/netfilm.png') }} " style="width: 80px;" alt="logo">
                  <h4 class="mt-2 mb-5 pb-1 text-primary h2" style="font-weight: 700;">NETFILM</h4>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <p>Register to enjoy the best entertainment</p>
                
                  <div class="form-floating mb-3">
                    <input id="floatingInput" placeholder="Name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="floatingInput">Name</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-floating mb-3">
                    <input id="floatingInput" placeholder="E-Mail Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="floatingInput">E-Mail Address</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-floating mb-3">
                    <input id="floatingPassword" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-floating mb-3">
                    <input id="floatingPassword" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <label for="floatingPassword">Confirm Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>



                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg fw-bold mt-3" type="submit">Register</button>
                  </div>
                  <div class="">
                   
                  </div>
                  
                    
                  
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-start gradient-custom-2 border-3" style="background-image: url('https://www.chicagotribune.com/resizer/h8W1yZjltOOncefELdx3KpgtX30=/1200x0/top/cloudfront-us-east-1.images.arcpublishing.com/tronc/LRCH34F6FVBEZF5NXNDAVA2IS4.jpg'); background-repeat: no-repeat;background-size: cover;background-position: center; border-radius:5px;">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h3 class="mb-5">Enjoy the best movies</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
