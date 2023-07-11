<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMahasiswa;
use App\Models\Gelombang;

class PendaftaranMahasiswaController extends Controller
{

    public function welcome()
    {
        $gelombangs = Gelombang::all()->toArray();
        return view('pmb.home', compact('gelombangs'));
    }

    public function admin()
    {
        return view('pmb.login_admin');
    }

    public function index()
    {
        $pmb = PendaftaranMahasiswa::all()->toArray();
        return view('pmb.dashboard', compact('pmb'));
    }

    public function store(Request $request)
    {
        $pendaftaran = new PendaftaranMahasiswa();
        $pendaftaran = $request->all();

        PendaftaranMahasiswa::create($pendaftaran);

        return redirect()->route('home')->with('success', 'Pendaftaran Berhasil');
    }


    public function edit(string $id)
    {
        $pmb = PendaftaranMahasiswa::where('id_pendaftaran', $id)->first();
        $gelombangs = Gelombang::all()->toArray();
        return view('pmb.edit', compact('pmb', 'gelombangs'));
    }

    public function filter(Request $request)
    {
        $searchKeyword = $request->input('search');
        $pmb = PendaftaranMahasiswa::whereRaw('LOWER(nama_lengkap) like ?', ['%' . strtolower($searchKeyword) . '%'])->get();
        return view('pmb.dashboard', compact('pmb'));

    }


    public function update(Request $request, $id)
    {
        $pmb = PendaftaranMahasiswa::where('id_pendaftaran', $id)->first();
        $pmb->nama_lengkap = $request->get('nama_lengkap');
        $pmb->id_gelombang = $request->get('id_gelombang');
        $pmb->jurusan = $request->get('jurusan');
        $pmb->status_pendaftaran = $request->get('status_pendaftaran');
        $pmb->save();
        return redirect()->route('direct_dashboard')->with('success', 'Perubahan data berhasil');
    }

    public function destroy($id)
    {
        PendaftaranMahasiswa::where('id_pendaftaran', $id)->delete();
        return redirect()->route('direct_dashboard')->with('delete', 'Pendaftaran mahasiswa dibatalkan');

    }
}