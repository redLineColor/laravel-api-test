<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator;

class PostsSeeder extends Seeder
{
    /**
     * @var Generator
     */
    protected $faker;

    public function __construct(Generator $faker)
    {
        $this->faker = $faker;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 300; $i++) {
            DB::table('posts')->insert([
                'name' => $this->faker->name,
                'slug' => Str::random(),
                'status' => 1,
                'some_column0' => Str::random(32),
                'some_column1' => Str::random(32),
                'some_column2' => Str::random(32),
                'some_column3' => Str::random(32),
                'some_column4' => Str::random(32),
                'some_column5' => Str::random(32),
            ]);
        }
    }
}
