<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class  SiswaController extends Controller
{
    function index(){ 
       $data = DB::table('siswa')->get();

        return view('siswa',['data' => $data]);
    }
    function create(Request $request):RedirectResponse
    {
        $validasi = $request->validate([
            'nama' => 'required|max:50',
            'kelas' => 'required'
        ]);

        if($validasi){
            DB::table('siswa')->insert([
                'nama' => $request->nama,
                'kelas' => $request->kelas
            ]);
        }
         return redirect('/siswa');
    }

    function update(Request $request):RedirectResponse{
        $validasi = $request->validate([
            'nama' =>'required|max:50',
            'kelas' =>'required'
        ]);

        if($validasi){
            DB::table('siswa')->where('id', $request->id)->update([
                'nama' => $request->nama,
                'kelas' => $request->kelas
            ]);
        } 
        return redirect('/siswa');
    }

    function delete(string $id):RedirectResponse{
        DB::table('siswa')->where('id', $id)->delete();
        return redirect('/siswa');
    }
}
