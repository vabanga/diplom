<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            'name' => 'Basics',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('themes')->insert([
            'name' => 'Mobile',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('themes')->insert([
            'name' => 'Account',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('themes')->insert([
            'name' => 'Payments',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('themes')->insert([
            'name' => 'Privacy',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('themes')->insert([
            'name' => 'Delivery',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
