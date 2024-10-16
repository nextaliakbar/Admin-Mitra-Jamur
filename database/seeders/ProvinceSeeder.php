<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withHeaders([
            'key' => config('services.rajaongkir.key'),
        ])->get('https://pro.rajaongkir.com/api/province');

        foreach ($response['rajaongkir']['results'] as $province) {
            Province::create([
                'province_id' => $province['province_id'],
                'name'        => $province['province']
            ]);
        }
    }
}
