<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'nama'          => 'Muhammad Faizal Ardhavy Heru',
                'npm'           => '21',
                'alamat'        => 'Lampung',
                'created_at'    =>  Time::now()
            ],
            [
                'nama'          => 'Ardhavy Heru',
                'npm'           => '21',
                'alamat'        => 'Balam',
                'created_at'    =>  Time::now()
            ],
            [
                'nama'          => 'Faizal Ardhavy',
                'npm'           => '31',
                'alamat'        => 'Bapung',
                'created_at'    =>  Time::now()
            ],

        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}