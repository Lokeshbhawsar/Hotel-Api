<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Container\Container;

class HotelReviewSeeder extends Seeder
{
	/**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 13 ; $i++) { 
    		\App\Models\HotelReview::insert([
	            'title' => $this->faker->jobTitle(),
	            'hotel_id' => rand(1,15),
	            'description' => $this->faker->text(),
	            'rating' => rand(1,5),
	            'author' => $this->faker->name(),
	            'created_at' => date('Y-m-d H:i:s'),
	        ]);
    	}
    }
}
