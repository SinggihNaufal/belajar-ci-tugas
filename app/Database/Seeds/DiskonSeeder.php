<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        $nominalOptions = [100000, 200000, 300000];

        // Loop untuk membuat 10 data
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'tanggal' => Time::today()->addDays($i)->toDateString(),

                'nominal' => $nominalOptions[array_rand($nominalOptions)],

                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
        }

        $this->db->table('diskon')->insertBatch($data);
    }
}
