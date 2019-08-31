<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
            

DB::table('customers')->insert([
            'name' => 'John Doe',
            'address' => 'Quezon City',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('customers')->insert([
            'name' => 'Jane Greg',
            'address' => 'Pasay City',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),]);

        DB::table('customers')->insert([
            'name' => 'Steven Smith',
            'address' => 'Mandaluyong City',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), ]);
        
    }
}
