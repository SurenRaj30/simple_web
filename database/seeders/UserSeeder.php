<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'msisdn' => $faker->unique->randomDigitNotNull,
                'shortcode' => $faker->shortcode,
                'keyword' => $faker->keyword,
                'status' =>  $faker->status,
                'service' =>  $faker->service,
                'charge_price' =>  $faker->charge_price,
            ]);
        }
    }
}
