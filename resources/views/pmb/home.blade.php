@extends('layout.app')
@section('title', 'STT Bandung')
@section('type', 'home')
@section('type-footer', 'footer')
@section('btn', 'Admin')

@section('content')
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Kampus Merdeka<br />#CampusOfCreativity</h1>
        <h2>Segera bergabung menjadi bagian Sekolah Tinggi Teknologi Bandung!</h2>
    </div>
</section>

@if ($errors->any())
<script>
    alert('Terjadi Kesalahan: {{ implode(", ", $errors->all()) }}');
</script>
@endif

@if (\Session::has('success'))
<script>
    alert("{{ \Session::get('success') }}");
</script>
@endif

<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('img/sttb.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Tentang Sekolah Tinggi Teknologi Bandung</h3>
                <ul>
                    <li>
                        Sekolah Tinggi Teknologi Bandung berdiri sejak tahun 1991,
                        yang di prakarsai oleh alumni Institut Teknologi Bandung
                        (ITB). Visi Sekolah Tinggi Teknologi Bandung adalah menjadi
                        perguruan tinggi yang berdaya saing dan unggul secara nasional
                        pada tahun 2025. Dengan harapan dapat memberikan kesempatan
                        yang lebih luas kepada masyarakat untuk mendapatkan pendidikan
                        di Perguruan Tinggi serta bertujuan untuk menghasilkan sarjana
                        dan tenaga ahli yang kompeten di bidangnya dan mampu
                        menghadapi tantangan global, mampu memanfaatkan berbagai
                        peluang yang ada di sekelilingnya, dan memiliki jiwa
                        kewirausahaan yang tinggi dengan harapan dapat menjadi seorang
                        pengusaha sukses serta dapat menciptakan kesempatan kerja bagi
                        lingkungannya. Saat ini Sekolah Tinggi Teknologi Bandung
                        memiliki 4 Program Studi, yaitu Teknik Informatika, Teknik
                        Industri, Desain Komunikasi Visual dan Bisnis Digital.
                        Kurikulum yang digunakan selalu disesuaikan dengan kebutuhan,
                        baik kebutuhan industri manufaktur ataupun industri lain.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="jurusan" class="courses">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Jurusan</h2>
            <p>Program Studi</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="course-item">
                    <img src="{{ asset('img/t-informatika.jpg') }}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <h3>Teknik Informatika</h3>
                        <p>
                            Program studi Teknik Informatika bertujuan untuk melatih
                            mahasiswa dalam pemahaman dan penerapan konsep, prinsip,
                            metode, dan teknik dalam pengembangan perangkat lunak dan
                            sistem informasi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="course-item">
                    <img src="{{ asset('img/t-industri.jpg') }}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <h3>Teknik Industri</h3>
                        <p>
                            Program studi Teknik Industri adalah program pendidikan
                            tinggi yang fokus pada pengembangan pengetahuan dan
                            keterampilan dalam bidang rekayasa dan manajemen industri.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 3.5rem">
            <div class="col-lg-4 col-md-6">
                <div class="course-item">
                    <img src="{{ asset('img/dkv.jpg') }}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <h3>Desain Komunikasi Visual</h3>
                        <p>
                            Program studi Desain Komunikasi Visual adalah sebuah program
                            pendidikan tinggi yang fokus pada pengembangan keterampilan
                            dan pengetahuan dalam bidang desain grafis, ilustrasi,
                            fotografi, tipografi, dll.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="course-item">
                    <img src="{{ asset('img/bisdig.jpg') }}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <h3>Bisnis Digital</h3>
                        <p>
                            Program studi bisnis digital adalah program pendidikan
                            tingkat perguruan tinggi yang fokus pada aspek-aspek bisnis
                            yang terkait dengan teknologi digital dan transformasi
                            digital yang terus berkembang.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pmb" class="pmb">
    <div class="container" data-aos="fade-up">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="text-center">
                    <h2>Formulir</h2>
                    <h4>Penerimaan Mahasiswa Baru</h4>
                </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
                <form action="{{ route('pmb.store') }}" method="post" class="php-email-form">
                    {{csrf_field()}}
                    <div class="form-group mt-3">
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap"
                            required />
                    </div>
                    <div class="form-group mt-3">
                        <select class="form-control" name="jenis_kelamin" required>
                            <option value="" disabled selected hidden>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah"
                            required />
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon"
                            pattern="[0-9]+" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
                    </div>
                    <div class="form-group mt-3">
                        <select class="form-control" name="jurusan" required>
                            <option value="" disabled selected hidden>Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                    </div>
                    <input type="hidden" name="status_pendaftaran" value="Menunggu Konfirmasi" />

                    <div class="form-group mt-3">
                        <select class="form-control" name="id_gelombang" required>
                            <option value="" disabled selected hidden>Gelombang</option>
                            @foreach($gelombangs as $gelombang)
                            @php
                            $periodeAwal = \Carbon\Carbon::parse($gelombang['periode_awal'])->format('d F
                            Y');
                            $periodeAkhir = \Carbon\Carbon::parse($gelombang['periode_akhir'])->format('d F
                            Y');
                            @endphp
                            <option value="{{ $gelombang['id_gelombang'] }}">
                                {{ $gelombang['nama_gelombang'] }} ({{ $periodeAwal }} - {{ $periodeAkhir }})
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit">DAFTAR SEKARANG</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection