<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserInfo;


class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserInfo::create([
            'name' => 'Admin',
            'gender' =>1,
            'email' => 'admin@gamil.com',
            'phone'=>'0398645613',
            'score' => rand(10,1000),
            'user_id' => 1
        ]);
    }
}
