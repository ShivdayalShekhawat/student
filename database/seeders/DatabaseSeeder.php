<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

    	  $faker = Faker::create();
    	foreach (range(1,200) as $index) {

    		$hindi_marks = $faker->numberBetween($min = 0, $max = 100);
    		$eng_marks = $faker->numberBetween($min = 0, $max = 100);
    		$maths_marks =$faker->numberBetween($min = 0, $max = 100);
    		$science_marks = $faker->numberBetween($min = 0, $max = 100);
    		$sanskrit_marks = $faker->numberBetween($min = 0, $max = 100);
    		$totalmarkes = $hindi_marks+$eng_marks+$maths_marks+$science_marks+$sanskrit_marks;
            DB::table('students')->insert([
                'name' => $faker->name(),
                'roll_no' => $faker->unique()->numberBetween($min = 100000, $max = 999999),
                'hindi_marks' => $hindi_marks,
                'eng_marks' => $eng_marks,
                'sanskrit_marks' => $sanskrit_marks,
                'maths_marks' => $maths_marks,
                'science_marks' => $science_marks,
                'image'=>$faker->imageUrl($width = 200, $height = 200),
                'totalmarkes'=>$totalmarkes,
                'class_id'=>$faker->numberBetween($min = 1, $max = 12),
            ]);
        }

    }
}
