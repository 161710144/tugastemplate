<?php

use Illuminate\Database\Seeder;

class artisseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rrq = [
['nis'=>'00897876','nama'=>'Asep','tempat_lahir'=>'Depok','tanggal_lahir'=>'1999-11-01','alamat'=>'Jl.Cijagra','cita_cita'=>'Penyanyi','hobi'=>'berenang','poto'=>'tu1.jpg'],
['nis'=>'00897877','nama'=>'Hannanisa','tempat_lahir'=>'Bogor','tanggal_lahir'=>'1989-02-11','alamat'=>'Jl.Pasung','cita_cita'=>'Penyanyi','hobi'=>'menari','poto'=>'tu.jpg'],
['nis'=>'00897878','nama'=>'Rosidin','tempat_lahir'=>'Kupang','tanggal_lahir'=>'1987-12-21','alamat'=>'Jl.Astri','cita_cita'=>'Penyanyi','hobi'=>'skate','poto'=>'tu3.jpg'],
['nis'=>'00897879','nama'=>'Uso','tempat_lahir'=>'Aceh','tanggal_lahir'=>'1999-12-31','alamat'=>'Jl.Sunda','cita_cita'=>'Penyanyi','hobi'=>'menggambar','poto'=>'tu4.jpg'],
['nis'=>'00897880','nama'=>'Yola','tempat_lahir'=>'Kalimantan','tanggal_lahir'=>'1999-11-24','alamat'=>'Jl.Jakarta','cita_cita'=>'Penyanyi','hobi'=>'bersepeda','poto'=>'tu5.jpg']
        ];
        DB::table('artis')->insert($rrq);
    }
}
