<?php

namespace Modules\Cinema\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Cinema\Entities\Cinema;

class CinemaDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        Cinema::create([
            "cinemaName" => "Asgard Cinema",
            "address" => "No 4, yaba, Lagos State",
            "image" => "cinema1.jpg"
        ]);
        Cinema::create([
            "cinemaName" => "Apokolips Cinema",
            "address" => "No 1, ikorodu, Lagos State",
            "image" => "cinema2.jpg"
        ]);
        Cinema::create([
            "cinemaName" => "Norse Cinema",
            "address" => "No 3, lekki, Lagos State",
            "image" => "cinema3.jpg"
        ]);
    }
}
