<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class nmtNhaccTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        // Tạo đối tượng Factory
        $faker = Faker::create();
        foreach(range(1,50) as $index)
        {
            DB::table('nmtnhacc')->insert([
                'nmtManhacc'=>substr($faker->uuid(),0,3),
                // 'MaNCC'=>$faker->word(15),
                'nmtTennhacc'=>$faker->sentence(5),
                'nmtDiachi'=>$faker->address(),
                'nmtDienthoai'=>$faker->phoneNumber(10),
                'nmtEmail'=>$faker->email(),
                'nmtstatus'=>$faker->boolean()
            ]);
        }
    }
}
