<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(Request $request){
        if($request->has(['cari'])){
            $pegawai = DB::table('pegawai')->where('nama', 'like', '%'.$request->cari.'%')->paginate(10);
        }else{
            $pegawai = DB::table('pegawai')->paginate(10);
        }


        return view('pegawai/index', [
            'pegawai' => $pegawai
        ]);
    }

    public function tambah(Request $request){
        if($request->isMethod('post')){
            $tambah = DB::table('pegawai')->insert([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
            ]);

            if($tambah){
                return redirect('/pegawai');
            }
        }

        return view('pegawai/tambah');
    }

    public function edit(Request $request){
        if($request->isMethod('post')){
            $update = DB::table('pegawai')->where('id', $request->id)->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            if($update){
                return redirect('/pegawai');
            }
        }

        $pegawai = DB::table('pegawai')->where('id', $request->id)->first();
        return view('pegawai/edit', [
            'pegawai' => $pegawai
        ]);

    }

    public function hapus($id){
        $hapus = DB::table('pegawai')->where('id', $id)->delete();

        return redirect('/pegawai');
    }

    public function formulir(){
        return view('pegawai/formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return "Nama : ".$nama.", Alamat : ".$alamat;
    }

}
