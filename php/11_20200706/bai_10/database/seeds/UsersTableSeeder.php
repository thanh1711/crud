<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker = Faker\Factory::create();
    for($i=0; $i<10; $i++){
        $name=$faker->name();
        $email=$faker->safeEmail;
    // DB::table('users')->insert([
    //     'name'=> $faker->name(),
    //     'email'=>$faker->email(),
    //     'password'=>bcrypt('whgdjsgifhhd'),

     $thanh=User::create([
        "name"=>$name,
        "email"=>$email,
        "password"=>bcrypt('123456')
    ]);
$thanh->save();
}
       
    //]);

    }
}
