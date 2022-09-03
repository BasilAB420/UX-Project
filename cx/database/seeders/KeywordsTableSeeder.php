<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Illuminate\Support\Int;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('keywords')->insert([
            'service_id' => Service::inRandomOrder()->first()->id,
            'word' => Str::random(10),
            'weigth' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
        ]);

        DB::table('keywords')->insert([
            'service_id' => Service::inRandomOrder()->first()->id,
            'word' => Str::random(10),
            'weigth' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
        ]);

        DB::table('keywords')->insert([
            'service_id' => Service::inRandomOrder()->first()->id,
            'word' => Str::random(10),
            'weigth' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
        ]);

        DB::table('keywords')->insert([
            'service_id' => Service::inRandomOrder()->first()->id,
            'word' => Str::random(10),
            'weigth' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
        ]);

        DB::table('keywords')->insert([
            'service_id' => Service::inRandomOrder()->first()->id,
            'word' => Str::random(10),
            'weigth' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
        ]);

        DB::table('keywords')->insert([
            'service_id' => Service::inRandomOrder()->first()->id,
            'word' => Str::random(10),
            'weigth' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
        ]);
    }
}
