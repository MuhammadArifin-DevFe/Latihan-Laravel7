<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = array(
        [
            'nama' => 'Madi',
            'kelas' => 'Atas',
            
        ],
        [
            'nama' => 'Rima',
            'kelas' => 'Menengah',
            
        ],
        [
            'nama' => 'Yadi',
            'kelas' => 'Bawah',
            
        ],
        [
            'nama' => 'Nurdin',
            'kelas' => 'Bawah Sangat',
            
        ]);
        foreach ($siswa as $row){
            DB::table('siswa')->insert($row);
        }
    }
}
