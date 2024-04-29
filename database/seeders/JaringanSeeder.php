<?php

namespace Database\Seeders;

use App\Models\Jaringan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JaringanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $jaringan = [
            ["foto"=> "nah.png","nama" => "coba", "jabatan" => "ketua"],
           
        ];

        foreach ($jaringan as $j) {
            if(!Jaringan::where('jabatan', $j['jabatan'])->first()){
                $g = new Jaringan();
                $g->foto = $j['foto'];
                $g->nama = $j['nama'];
                $g->jabatan = $j['jabatan'];
                
                    $g->save();
            }
        }
    }
}