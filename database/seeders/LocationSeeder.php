<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['lokasi' => 'Stadion Utama'],
            ['lokasi' => 'Galeri Seni Kota'],
            ['lokasi' => 'Taman Kota'],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
