<?php

namespace Database\Seeders;

use App\Models\Panduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $panduan = [
            ["file"=> "nah.pdf","keterangan" => "coba"],
           
        ];

        foreach ($panduan as $p) {
            if(!Panduan::where('file', $p['file'])->first()){
                $g = new Panduan();
                $g->file = $p['file'];
                $g->keterangan = $p['keterangan'];
                
                $g->save();
            }
        }
    }
}
