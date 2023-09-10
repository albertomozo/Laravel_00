<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
              \DB::table("usuarios")->insert(
                    array(
                           'name'     => $faker->firstName("male"),
                           'email'  => $faker->email,
                           'password' => $faker-> password,
                           'created_at' => date('Y-m-d H:m:s'),
                           'updated_at' => date('Y-m-d H:m:s')
                    )
              );
        }
  }
}
