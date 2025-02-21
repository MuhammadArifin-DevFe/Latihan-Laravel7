<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



Route::get('/', [
    SiswaController::class,
    'index'
]);
Route::get('/siswa', [
    SiswaController::class,
    'index'
]);
Route::get('/siswa/tambah_siswa', function () {
    return view('tambah_siswa');
});
Route::get('/siswa/edit/{id}', function (Request $request){
    $data = DB::table('siswa')->where('id', $request->id)->first();
    return view('edit_siswa', ['data' => $data]);

});
Route::POST('siswa/post', [SiswaController::class, 'create']);
Route::POST('siswa/update', [SiswaController::class, 'update']);
Route::get('siswa/hapus/{id}', [SiswaController::class, 'delete']);
