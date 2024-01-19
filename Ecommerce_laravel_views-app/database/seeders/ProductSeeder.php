<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $faker = Faker::create();
            $obj=new Product;
            $obj->product_name=$faker->text;
            $obj->product_category= $faker->text;
            $obj->product_price= $faker->numberbetween($min=1,$max=10000);
            $obj->product_quantity= $faker->numberbetween($min=1,$max=100);
            $obj->save();
        }
    }
}
 