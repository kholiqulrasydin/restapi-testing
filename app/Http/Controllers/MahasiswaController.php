<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    

    public function create(Request $request){

        $mahasiswa = new Mahasiswa([
            'nama' => $request['nama'],
            'nim' => $request['nim'],
            'prodi' => $request['prodi']
        ]);

        $mahasiswa->save();

        return Response()->json([
            'indikator' => 'Success Menambah Data Mahasiswa'
        ], 200);

    }

    public function showdata(){
        $data = Mahasiswa::all();

        return Response()->json([
            'indikator' => 'Success Menampilkan data mahasiswa',
            'data' => $data
        ], 200);
    }

    public function update(Request $request){
        Mahasiswa::where('id', '=', $request['id'])->update([
            'nama' => $request['nama'],
            'nim' => $request['nim'],
            'prodi' => $request['prodi']
        ]);

        return Response()->json([
            'indikator' => 'Success Memperbarui Data Mahasiswa'
        ], 200);
    }

    public function delete(Request $request){
        Mahasiswa::where('id', '=', $request['id'])->delete();

        return Response()->json([
            'indikator' => 'Success menghapus data mahasiswa'
        ], 200);

    }

}
