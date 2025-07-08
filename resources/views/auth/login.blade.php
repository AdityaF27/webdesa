@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="vh-100" style="background-color: #f2f6fc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-10 col-lg-8 col-xl-6">

        <div class="card shadow-lg border-0 rounded-4">
          <div class="row g-0">

            <!-- Ilustrasi Kiri -->
            <div class="col-md-6 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                   alt="Login image" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover;">
            </div>

            <!-- Form Kanan -->
            <div class="col-md-6">
              <div class="card-body px-4 py-5">

                <h4 class="mb-4 fw-bold text-center text-success">Login ke Akun Anda</h4>

                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <!-- Email -->
                  <div class="form-outline mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email"
                      class="form-control @error('email') is-invalid @enderror"
                      placeholder="Masukkan email" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                  </div>

                  <!-- Password -->
                  <div class="form-outline mb-3 position-relative">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password"
                      class="form-control @error('password') is-invalid @enderror"
                      placeholder="Masukkan password" required>
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                  </div>

                  <!-- Tombol Submit -->
                  <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                  </div>

                 

                </form>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
