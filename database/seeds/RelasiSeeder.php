<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Jurusan;
use App\MataKuliah;
use App\MataKuliahMahasiswa;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->delete();
        DB::table('wali')->delete();
        DB::table('dosen')->delete();
        DB::table('jurusan')->delete();
        DB::table('mata_kuliah')->delete();
        DB::table('mata_kuliah_mahasiswa')->delete();

        $dosen = Dosen::create(array(
            'nama' => 'Bayu Pramayuda',
            'nipd' => '1234567890',
            'alamat' => 'kota baru'));

        $this->command->info('Data dosen telah diisi!');

        $jurusan = Jurusan::create(array('nama_jurusan'=>'Arsitek'));
        $jurusan2 = Jurusan::create(array('nama_jurusan'=>'Kebidanan'));
        $this->command->info('Jurusan telah diisi!');


        $novay = Mahasiswa::create(array(
			'nama' => 'Noviyanto Rachmadi',
			'nis'  => '1015015072',
			'id_dosen' => $dosen->id));

		$dije = Mahasiswa::create(array(
			'nama' => 'Djaffar',
			'nis'  => '1015015088',
			'id_dosen' => $dosen->id));

		$ayu = Mahasiswa::create(array(
			'nama' => 'Puji Rahayu',
			'nis'  => '1015015078',
			'id_dosen' => $dosen->id));

		$this->command->info('Mahasiswa telah diisi!'); 


    Wali::create(array(
			'nama'  => 'Achmad S',
			'id_mahasiswa' => $novay->id
		));
		# Ciptakan wali si $dije
		Wali::create(array(
			'nama'  => 'Entahlah',
			'id_mahasiswa' => $dije->id
		));
		# Ciptakan wali si $ayu
		Wali::create(array(
			'nama'  => 'Arianto',
			'id_mahasiswa' => $ayu->id
		));
		$this->command->info('Data mahasiswa dan wali telah diisi!');

		$matkul::Mata_Kuliah(array('nama_mata_kuliah'=>'Arsitek'));
			'nama_mata_kuliah' => 'MIPA'
            'kkm'=>'75'
			
		));

		$matkul::Mata_Kuliah(array('nama_mata_kuliah'=>'Arsitek'));
			'nama_mata_kuliah'  => 'MataKuliahMahasiswa',
            'kkm'=>'75'
			
		));
		

		$matkul::Mata_Kuliah(array('nama_mata_kuliah'=>'Arsitek'));
			'nama_mata_kuliah'  => 'IPA',
            'kkm'=>'75',
			
		));
		
		
		$this->command->info('Data mata kuliah telah diisi!');

		
    }
    }

