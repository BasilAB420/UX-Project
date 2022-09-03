<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert([
            'branch' => Str::random(10),
            'name' => Str::random(10),
            'birth_date' => date('y/m/d H:i:s'),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'profession' => Str::random(10),
            'country' => Str::random(10),
            'contact_detials' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('clients')->insert([
            'branch' => Str::random(10),
            'name' => Str::random(10),
            'birth_date' => date('y/m/d H:i:s'),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'profession' => Str::random(10),
            'country' => Str::random(10),
            'contact_detials' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('clients')->insert([
            'branch' => Str::random(10),
            'name' => Str::random(10),
            'birth_date' => date('y/m/d H:i:s'),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'profession' => Str::random(10),
            'country' => Str::random(10),
            'contact_detials' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('clients')->insert([
            'branch' => Str::random(10),
            'name' => Str::random(10),
            'birth_date' => date('y/m/d H:i:s'),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'profession' => Str::random(10),
            'country' => Str::random(10),
            'contact_detials' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('clients')->insert([
            'branch' => Str::random(10),
            'name' => Str::random(10),
            'birth_date' => date('y/m/d H:i:s'),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'profession' => Str::random(10),
            'country' => Str::random(10),
            'contact_detials' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('clients')->insert([
            'branch' => Str::random(10),
            'name' => Str::random(10),
            'birth_date' => date('y/m/d H:i:s'),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'profession' => Str::random(10),
            'country' => Str::random(10),
            'contact_detials' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);
    }
}
