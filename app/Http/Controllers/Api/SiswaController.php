<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function allSiswa() {
        $siswa = Siswa::all();

        return response()->json($siswa);
    }

    public function addSiswa(Request $request) {

        Siswa::create([
            "nama_siswa" => $request->nama_siswa,
            "angkatan" => $request->angkatan,
            "nis" => $request->nis,
            "kelas" => $request->kelas,
            "alamat" => $request->alamat,
        ]);

        return response()->json([
            "pesan" => "Berhasil menambah siswa"
        ]);

    }

    public function getOneSiswa($id) {

        $siswa = Siswa::find($id);

        if(!$siswa) {
            return response()->json([
                'pesan' => "siswa tidak ditemukan!"
            ]);
        }

        return response()->json($siswa);

    }

    public function editSiswa(Request $request, $id) {

        Siswa::where('id', $id)->update([
            "nama_siswa" => $request->nama_siswa,
            "angkatan" => $request->angkatan,
            "nis" => $request->nis,
            "kelas" => $request->kelas,
            "alamat" => $request->alamat,
        ]);

        return response()->json([
            "pesan" => "berhasil mengedit siswa!"
        ]);

    }

    public function deleteSiswa($id) {

        Siswa::find($id)->delete();

        return response()->json([
            "pesan" => "Berhasil menghapus siswa!"
        ]);

    }
}
