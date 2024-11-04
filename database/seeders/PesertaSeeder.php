<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peserta')->insert([
            [
                'id_peserta'=>'1',
                'nama_peserta'=>'Aprila Jessica',
                'alamat'=>'Jalan Happy',
                'no_telp'=>'081919841640',
                'nama_admin'=>'Suryani',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id_peserta'=>'2',
                'nama_peserta'=>'Viona Tham',
                'alamat'=>'Jalan Senang',
                'no_telp'=>'085591125368',
                'nama_admin'=>'Putri',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
