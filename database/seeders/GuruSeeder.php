<?php

namespace Database\Seeders;

use App\Models\Dashboard\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::create([
            'name' => 'ISBANI, S.Pd',
            'nip' => '19671015199301 1 002',
            'grade' => 'PNS',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 15 Oktober 1967'
        ]);
        Guru::create([
            'name' => 'SOLIKUN, S.Pd.SD',
            'nip' => '19630917 199103 1 003',
            'grade' => 'PNS',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 17 September 1963'
        ]);
        Guru::create([
            'name' => 'DANY KURNIAWAN, S.Pd',
            'nip' => '19880719 200903 1 002',
            'grade' => 'PNS',
            'status' => 'Aktif',
            'date_of_birth' => 'Karanganyar, 19 Juli 1988'
        ]);
        Guru::create([
            'name' => "MALIHATUR ROFI'AH, S.Pd",
            'nip' => '19910205 202012 2 004',
            'grade' => 'CPNS',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 05 Februari 1991'
        ]);
        Guru::create([
            'name' => "SUSIANAH, S.Pd.I",
            'nip' => '',
            'grade' => 'WB',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 28 Agustus 1990'
        ]);
        Guru::create([
            'name' => "SRI RUHAYAH, S.Pd",
            'nip' => '',
            'grade' => 'WB',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 06 Januari 1975'
        ]);
        Guru::create([
            'name' => "SITTI NUR ARIFAH, S.Pd",
            'nip' => '',
            'grade' => 'WB',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 26 Maret 1994'
        ]);
        Guru::create([
            'name' => "ISBANI, S.Pd",
            'nip' => '',
            'grade' => 'WB',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 15 Mei 1991'
        ]);
        Guru::create([
            'name' => "KADANG ARIF TIRTANA, A.Ma",
            'nip' => '',
            'grade' => 'WB',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 16 Maret 1990'
        ]);
        Guru::create([
            'name' => "EKO SETIAWAN",
            'nip' => '',
            'grade' => 'WB',
            'status' => 'Aktif',
            'date_of_birth' => 'Wonogiri, 13 Juli 1995'
        ]);
    }
}
