<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Container\Container;
use Str;

class HotelSeeder extends Seeder
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
    	$supplier = ['Own', 'HotelBeds', 'SunHotels'];
    	for ($i=1; $i < 10 ; $i++) { 
    		\App\Models\Hotel::insert([
	            'name' => $this->faker->name(),
	            'address' => $this->faker->address(),
	            'supplier' => $supplier[rand(0,2)],
	            'rating' => rand(1,5),
	            'status' => 1,
	            'created_at' => date('Y-m-d H:i:s'),
	        ]);
    	}
    }
}
