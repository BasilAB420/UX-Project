<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => Str::random(10),
            'logo' => 'WhatsApp Image 2022-07-26 at 10.36.43 AM.jpeg',
            'business_type' => Str::random(10),
            'branch' => Str::random(10),
            'country' => Str::random(10),
        ]);

        DB::table('companies')->insert([
            'name' => Str::random(10),
            'logo' => 'WhatsApp Image 2022-07-26 at 10.36.43 AM.jpeg',
            'business_type' => Str::random(10),
            'branch' => Str::random(10),
            'country' => Str::random(10),
        ]);

        DB::table('companies')->insert([
            'name' => Str::random(10),
            'logo' => 'WhatsApp Image 2022-07-26 at 10.36.43 AM.jpeg',
            'business_type' => Str::random(10),
            'branch' => Str::random(10),
            'country' => Str::random(10),
        ]);

        DB::table('companies')->insert([
            'name' => Str::random(10),
            'logo' => 'WhatsApp Image 2022-07-26 at 10.36.43 AM.jpeg',
            'business_type' => Str::random(10),
            'branch' => Str::random(10),
            'country' => Str::random(10),
        ]);

        DB::table('companies')->insert([
            'name' => Str::random(10),
            'logo' => 'WhatsApp Image 2022-07-26 at 10.36.43 AM.jpeg',
            'business_type' => Str::random(10),
            'branch' => Str::random(10),
            'country' => Str::random(10),
        ]);

        DB::table('companies')->insert([
            'name' => Str::random(10),
            'logo' => 'WhatsApp Image 2022-07-26 at 10.36.43 AM.jpeg',
            'business_type' => Str::random(10),
            'branch' => Str::random(10),
            'country' => Str::random(10),
        ]);
    }
}
