<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->insert([
            'name' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'manager' => Str::random(10),
            'branch' => Str::random(10),
            'analyse1' => Str::random(10),
            'analyse2' => Str::random(10),
            'analyse3' => Str::random(10),
            'analyse4' => Str::random(10),
            'analyse5' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('services')->insert([
            'name' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'manager' => Str::random(10),
            'branch' => Str::random(10),
            'analyse1' => Str::random(10),
            'analyse2' => Str::random(10),
            'analyse3' => Str::random(10),
            'analyse4' => Str::random(10),
            'analyse5' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('services')->insert([
            'name' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'manager' => Str::random(10),
            'branch' => Str::random(10),
            'analyse1' => Str::random(10),
            'analyse2' => Str::random(10),
            'analyse3' => Str::random(10),
            'analyse4' => Str::random(10),
            'analyse5' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('services')->insert([
            'name' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'manager' => Str::random(10),
            'branch' => Str::random(10),
            'analyse1' => Str::random(10),
            'analyse2' => Str::random(10),
            'analyse3' => Str::random(10),
            'analyse4' => Str::random(10),
            'analyse5' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('services')->insert([
            'name' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'manager' => Str::random(10),
            'branch' => Str::random(10),
            'analyse1' => Str::random(10),
            'analyse2' => Str::random(10),
            'analyse3' => Str::random(10),
            'analyse4' => Str::random(10),
            'analyse5' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);

        DB::table('services')->insert([
            'name' => Str::random(10),
            'start_date' => date('y/m/d H:i:s'),
            'end_date' => date('y/m/d H:i:s'),
            'manager' => Str::random(10),
            'branch' => Str::random(10),
            'analyse1' => Str::random(10),
            'analyse2' => Str::random(10),
            'analyse3' => Str::random(10),
            'analyse4' => Str::random(10),
            'analyse5' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id,
        ]);
    }
}
