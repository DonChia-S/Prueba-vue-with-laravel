<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i < 10; $i++){
            \DB::table("contacts")->insert(
                array(
                    'name'=>$faker->firstName(),
                    "phone"=>"35156646".$i,
                    "email"=>$faker->unique()->email,
                    "comment"=>"sdsadasdasd"
                )
            );
        }
    }
}
