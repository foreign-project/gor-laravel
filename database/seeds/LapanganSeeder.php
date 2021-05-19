<?php

use Illuminate\Database\Seeder;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lapangan')->delete();

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LF-'.$j ,
               'nama' => 'Lapangan Futsal',
               'lokasi' => 'Tangerang',
               'kode_jadwal' => 'F'.$j,
               'lat' => '-6.17814',
               'lng' => '106.63309',
           ]);
        }

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LB-'.$j ,
               'nama' => 'Lapangan Basket',
               'lokasi' => 'Tangerang',
               'kode_jadwal' => 'B'.$j,
               'lat' => '-6.17837',
               'lng' => '106.63298',
           ]);
        }

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LV-'.$j ,
               'nama' => 'Lapangan Voly',
               'lokasi' => 'Tangerang',
               'kode_jadwal' => 'V'.$j,
               'lat' => '-6.17843',
               'lng' => '106.63320',
           ]);
        }

    }
}
