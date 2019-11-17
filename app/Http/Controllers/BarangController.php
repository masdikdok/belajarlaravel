<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $barang = Barang::all();

        return view('barang/index', ['barang' => $barang]);
    }

    public function trash(){
        $barang = Barang::onlyTrashed()->get();

        return view('barang/trash', ['barang' => $barang]);
    }

    public function tambah(Request $request){

        if($request->isMethod('post')){
            $this->validate($request, [
                'nama' => 'required|min:5|max:30',
                'cabang_id' => 'required|integer',
            ]);

            $tambah = Barang::create([
                'nama' => $request->nama,
                'cabang_id' => $request->cabang_id,
                'status' => $request->status,
            ]);

            if($tambah){
                return redirect('/barang');
            }
        }

        return view('/barang/tambah');
    }

    public function edit(Request $request){
        $barang = Barang::find($request->id);

        if($request->isMethod('post')){
            $this->validate($request, [
                'nama' => 'required|min:5|max:30',
                'cabang_id' => 'required|integer',
            ]);

            $barang->nama = $request->nama;
            $barang->cabang_id = $request->cabang_id;
            $barang->status = $request->status;
            $barang->save();

            return redirect('/barang');
        }

        return view('/barang/edit', ['barang' => $barang]);
    }

    public function hapus(Request $request){
        $barang = Barang::find($request->id);
        $barang->delete();

        return redirect('/barang');
    }

    public function restore(Request $request){
        $barang = Barang::onlyTrashed()->find($request->id);
        $barang->restore();

        return redirect('/barang/trash');
    }

    public function forcedelete(Request $request){
        $barang = Barang::onlyTrashed()->find($request->id);
        $barang->forceDelete();

        return redirect('/barang/trash');
    }

}
