<?php

use Illuminate\Database\Seeder;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qyu = [
          ['kode_barang'=>'001','nama_barang'=>'Helm Bogo','harga_barang'=>'230.000'],
          ['kode_barang'=>'002','nama_barang'=>'Helm Cross','harga_barang'=>'330.000'],
          ['kode_barang'=>'003','nama_barang'=>'Helm KYT','harga_barang'=>'130.000']
        ];
        DB::table('barangs')->insert($qyu);
    }
}
