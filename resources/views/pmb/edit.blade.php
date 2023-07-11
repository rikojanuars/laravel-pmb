@extends('layout.app')
@section('title', 'Perubahan Data')
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
        <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="text-center">
                        <h2>Perubahan Data</h2>
                        <h4>Penerimaan Mahasiswa Baru</h4>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="{{ route('pmb.update', $pmb['id_pendaftaran']) }}" method="POST"
                        class="php-email-form">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group mt-3">
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap"
                                value="{{$pmb['nama_lengkap']}}" required />
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-control" name="id_gelombang" required>
                                <option value="" disabled selected hidden>Gelombang</option>
                                @foreach($gelombangs as $gelombang)
                                @php
                                $periodeAwal = \Carbon\Carbon::parse($gelombang['periode_awal'])->format('d F Y');
                                $periodeAkhir = \Carbon\Carbon::parse($gelombang['periode_akhir'])->format('d F Y');
                                $isSelected = ($gelombang['id_gelombang'] == $pmb['id_gelombang']) ? 'selected' :
                                '';
                                @endphp
                                <option value="{{ $gelombang['id_gelombang'] }}" {{ $isSelected }}>
                                    {{ $gelombang['nama_gelombang'] }} ({{ $periodeAwal }} - {{ $periodeAkhir }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-control" name="jurusan" required>
                                <option value="" disabled hidden>Jurusan</option>
                                @foreach(['Teknik Informatika', 'Teknik Industri', 'Desain Komunikasi Visual', 'Bisnis
                                Digital'] as $option)
                                <option value="{{ $option }}" {{ ($option==$pmb['jurusan']) ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-control" name="status_pendaftaran" required>
                                <option value="" disabled hidden>Status Pendaftaran</option>
                                @foreach(['Menunggu Konfirmasi', 'Diterima', 'Ditolak'] as $option)
                                <option value="{{ $option }}" {{ ($option==$pmb['jurusan']) ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit">PERUBAHAN DATA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection