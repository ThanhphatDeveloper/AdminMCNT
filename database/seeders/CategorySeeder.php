<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'Toán','status'=>1]);
        Category::create(['name'=>'IT','status'=>1]);
        Category::create(['name'=>'Khoa học','status'=>1]);
        Category::create(['name'=>'Địa lí','status'=>1]);
    }
}
