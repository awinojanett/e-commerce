<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
           [
            "name"=> "LG Mobile",
            "price"=> "200",
            "description"=> "A smartphone with 4GB RAM",
            "category"=> "mobile",
            "gallery"=> "https://www.lg.com/levant_en/images/plp-b2c/levanten-mobilephones-hero-2-m.jpg",
           ],
           [
            "name"=> "Oppo Mobile",
            "price"=> "300",
            "description"=> "A smartphone with 6GB RAM",
            "category"=> "mobile",
            "gallery"=> "https://www.phoneplacekenya.com/wp-content/uploads/2024/06/Oppo-Reno-12F-4G-2.jpg",
           ],
           [
            "name"=> "Samsung",
            "price"=> "600",
            "description"=> "A smartphone with 16GB RAM",
            "category"=> "mobile",
            "gallery"=> "https://www.phoneplacekenya.com/wp-content/uploads/2022/06/Samsung-Galaxy-A34-5G-B.jpg",
           ],
           [
            "name"=> "iPhone",
            "price"=> "900",
            "description"=> "A smartphone with 64GB RAM",
            "category"=> "mobile",
            "gallery"=> "https://www.phoneplacekenya.com/wp-content/uploads/2024/03/Apple-iPhone-16-1.jpg",
           ]
        ]);
    }
}
