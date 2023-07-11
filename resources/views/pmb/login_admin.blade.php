@extends('layout.app')
@section('title', 'Login Admin')
@section('type', 'admin')
@section('type-footer', 'footers')
@section('btn', 'Admin')
<link rel="icon" href="{{ asset('img/logo.ico') }}">
<div class="mytitle">
    <div class="container">
        <h2>Admin Penerimaan Mahasiswa Baru<br>
    </div>
</div>
@section('content')
<section id="admin" class="pmb">
    <div class="my-card">
        <div class="container">
            <div class="box-card">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <h2>Verifikasi Keamanan</h2>
                            <img src="{{ asset('img/security.png') }}" class="img-fluids">
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ implode(", ", $errors->all()) }}
                        </div>
                        @endif
                        <form action="{{ route('login') }}" method="post" class="php-email-form">
                            {{csrf_field()}}
                            <div class="form-group mt-3">
                                <input type="text" name="username" class="form-control" placeholder="Username"
                                    required />
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required />
                            </div>
                            <div class="text-center">
                                <button type="submit">MASUK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection