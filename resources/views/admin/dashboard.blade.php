@extends('layouts.admin')
@extends('layouts.header')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4>Selamat Datang di Dashboard</h4>
                </div>

                <div class="card-body">
                    <p>Halo, <strong>{{ Auth::user()->name }}</strong>!</p>

                    <p>Anda berhasil login ke sistem.</p>

                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
