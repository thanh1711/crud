<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        for($i=0;$i<10;$i++){
            User::create([
                'name'=>$faker->name(),
                'email'=>$faker->companyEmail,
                'password'=>bcrypt('123456')
            ]);

        }
    }
}
