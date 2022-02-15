<?php

namespace Database\Seeders;

use App\Models\Dashboard\Materi;
use Illuminate\Database\Seeder;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            Materi::create([
                'name' => 'Materi ' . $i,
                'class' => '5',
                'description' => 'Deskripsi ' . $i,
                'theme' => '1',
                'subject' => 'Ilmu Pengetahuan Alam',
                'uploaded_by' => 'Administrator'
            ]);
        }
    }
}
