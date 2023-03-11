<?php

namespace Database\Seeders;
use App\Models\User;                              //include before running data insertion
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //  User::Create([
    //     'name' => 'Nino',
    //     'email' => 'hjgjhg@gmail.com',                 //include before running data insertion
    //     'dob' => '1993-07-07',
    //     'status' => '1',
    //  ]);
    //  User::Create([
    //     'name' => 'Akhil',
    //     'email' => 'test@gmail.com',                 //include before running data insertion
    //     'dob' => '2022-07-07',
    //     'status' => '0',
    //  ]);

     User::factory()->count(1)->create();
    }
}
