@extends('layout.app')
@section('title', 'Dashboard')
@section('type', 'dashboard')
@section('btn', 'Logout')
@section('type-footer', 'footers')
<link rel="icon" href="{{ asset('img/logo.ico') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="mytitle">
    <div class="container">
        <h2>Selamat Datang Di Dashboard<br>
    </div>
</div>
@section('content')
<section id="admin" class="pmb">

    <div class="container">
        @if (\Session::has('success') || \Session::has('delete'))
        <div class="alert alert-{{ \Session::has('success') ? 'success' : 'danger' }}">
            <p style="font-size: 20px">{{ \Session::get(\Session::has('success') ? 'success' : 'delete') }}</p>
        </div><br />
        @endif
        <div class="headers">
            <div class="headersRefresh">
                <form action="{{ route('search') }}" method="POST">
                    {{csrf_field()}}
                    <div class="search-bar">
                        <div class="inner-form">
                            <div class="input-field second-wrap">
                                <input id="search" name="search" type="text" placeholder="Cari nama mahasiswa..."
                                    required />
                            </div>
                            <div class="input-field third-wrap">
                                <button class="btn-search" type="submit">
                                    <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas"
                                        data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="headersSearch">
                <form action="{{route('direct_dashboard')}}" method="POST" class="php-email-form">
                    {{csrf_field()}}
                    <button type="submit">Refresh</button>
                </form>
            </div>
        </div>
        <table class="my-table">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Gelombang</th>
                <th>Jurusan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            @foreach ($pmb as $mahasiswa)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$mahasiswa['nama_lengkap']}}</td>
                <td>{{$mahasiswa['id_gelombang']}}</td>
                <td>{{$mahasiswa['jurusan']}}</td>
                <td>{{$mahasiswa['status_pendaftaran']}}</td>
                <td>
                    <form action="{{route('pmb.destroy', $mahasiswa['id_pendaftaran'])}}" method="post"
                        style="margin-top:15px">
                        {{csrf_field()}}
                        <a class="fa-sharp fa-solid fa-pen-to-square fa-xl" style="color: black;"
                            href="{{route('pmb.edit', $mahasiswa['id_pendaftaran'])}}"></a>
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" style="border: none; background: none; cursor: pointer;">
                            <i class="fa-solid fa-trash fa-xl" style="color: black;"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection