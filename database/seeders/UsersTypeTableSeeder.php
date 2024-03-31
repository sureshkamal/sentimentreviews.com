<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')->insert([
            [
                'user_type_id' => 1,
                'user_type' => 'super_admin',
            ],
            [
                'user_type_id' => 2,
                'user_type' => 'store_admin',   
            ],
            [
                'user_type_id' => 3,
                'user_type' => 'customer',   
            ]
        ]);
    }
}
