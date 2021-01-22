<?php

use Illuminate\Database\Seeder;

class Kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_katogori = array('Keyboard','Mouse','Flashdisk');
        $data_keterangan = array('Segala macam laptop PC, Laptop, TV','Segala macam mouse wire maupun wireless','Segala macam merek, ukuran Flashdisk');
        for($a = 0; $a<count($data_katogori); $a++){
            DB::table('table_kategori')->insert([
                'kategori'=>$data_katogori[$a],
                'keterangan' =>$data_keterangan[$a]
            ]);
        }
    }
}
