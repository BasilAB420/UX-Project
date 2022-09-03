<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('c_x_e_s')->insert([
            'client_id' => Client::inRandomOrder()->first()->id,
            'service_id' => Service::inRandomOrder()->first()->id,
            'feedback_date' => date('y/m/d H:i:s'),
            'feedback_source' => Str::random(10),
            'feedback' => Str::random(10),
        ]);

        DB::table('c_x_e_s')->insert([
            'client_id' => Client::inRandomOrder()->first()->id,
            'service_id' => Service::inRandomOrder()->first()->id,
            'feedback_date' => date('y/m/d H:i:s'),
            'feedback_source' => Str::random(10),
            'feedback' => Str::random(10),
        ]);

        DB::table('c_x_e_s')->insert([
            'client_id' => Client::inRandomOrder()->first()->id,
            'service_id' => Service::inRandomOrder()->first()->id,
            'feedback_date' => date('y/m/d H:i:s'),
            'feedback_source' => Str::random(10),
            'feedback' => Str::random(10),
        ]);

        DB::table('c_x_e_s')->insert([
            'client_id' => Client::inRandomOrder()->first()->id,
            'service_id' => Service::inRandomOrder()->first()->id,
            'feedback_date' => date('y/m/d H:i:s'),
            'feedback_source' => Str::random(10),
            'feedback' => Str::random(10),
        ]);

        DB::table('c_x_e_s')->insert([
            'client_id' => Client::inRandomOrder()->first()->id,
            'service_id' => Service::inRandomOrder()->first()->id,
            'feedback_date' => date('y/m/d H:i:s'),
            'feedback_source' => Str::random(10),
            'feedback' => Str::random(10),
        ]);

        DB::table('c_x_e_s')->insert([
            'client_id' => Client::inRandomOrder()->first()->id,
            'service_id' => Service::inRandomOrder()->first()->id,
            'feedback_date' => date('y/m/d H:i:s'),
            'feedback_source' => Str::random(10),
            'feedback' => Str::random(10),
        ]);
    }
}
