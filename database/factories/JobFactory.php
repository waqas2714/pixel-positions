<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    
    public function definition(): array
    {
        $salariesArr = $salaries = [
            "$50,000 USD", "$55,000 USD", "$60,000 USD", "$65,000 USD", "$70,000 USD", "$75,000 USD", "$80,000 USD", "$85,000 USD", "$90,000 USD", "$95,000 USD",
            "$100,000 USD", "$105,000 USD", "$110,000 USD", "$115,000 USD", "$120,000 USD", "$125,000 USD", "$130,000 USD", "$135,000 USD", "$140,000 USD", "$145,000 USD",
            "$150,000 USD", "$155,000 USD", "$160,000 USD", "$165,000 USD", "$170,000 USD", "$175,000 USD", "$180,000 USD", "$185,000 USD", "$190,000 USD", "$195,000 USD",
            "$200,000 USD", "$205,000 USD", "$210,000 USD", "$215,000 USD", "$220,000 USD", "$225,000 USD", "$230,000 USD", "$235,000 USD", "$240,000 USD", "$245,000 USD",
            "$250,000 USD", "$255,000 USD", "$260,000 USD", "$265,000 USD", "$270,000 USD", "$275,000 USD", "$280,000 USD", "$285,000 USD", "$290,000 USD", "$295,000 USD",
            "$300,000 USD", "$305,000 USD", "$310,000 USD", "$315,000 USD", "$320,000 USD", "$325,000 USD", "$330,000 USD", "$335,000 USD", "$340,000 USD", "$345,000 USD",
            "$350,000 USD", "$355,000 USD", "$360,000 USD", "$365,000 USD", "$370,000 USD", "$375,000 USD", "$380,000 USD", "$385,000 USD", "$390,000 USD", "$395,000 USD",
            "$400,000 USD", "$405,000 USD", "$410,000 USD", "$415,000 USD", "$420,000 USD", "$425,000 USD", "$430,000 USD", "$435,000 USD", "$440,000 USD", "$445,000 USD",
            "$450,000 USD", "$455,000 USD", "$460,000 USD", "$465,000 USD", "$470,000 USD", "$475,000 USD", "$480,000 USD", "$485,000 USD", "$490,000 USD", "$495,000 USD",
            "$500,000 USD", "$505,000 USD", "$510,000 USD", "$515,000 USD", "$520,000 USD", "$525,000 USD", "$530,000 USD", "$535,000 USD", "$540,000 USD", "$545,000 USD",
            "$550,000 USD", "$555,000 USD", "$560,000 USD", "$565,000 USD", "$570,000 USD", "$575,000 USD", "$580,000 USD", "$585,000 USD", "$590,000 USD", "$595,000 USD",
            "$600,000 USD", "$605,000 USD", "$610,000 USD", "$615,000 USD", "$620,000 USD", "$625,000 USD", "$630,000 USD", "$635,000 USD", "$640,000 USD", "$645,000 USD",
            "$650,000 USD", "$655,000 USD", "$660,000 USD", "$665,000 USD", "$670,000 USD", "$675,000 USD", "$680,000 USD", "$685,000 USD", "$690,000 USD", "$695,000 USD",
            "$700,000 USD", "$705,000 USD", "$710,000 USD", "$715,000 USD", "$720,000 USD", "$725,000 USD", "$730,000 USD", "$735,000 USD", "$740,000 USD", "$745,000 USD",
            "$750,000 USD", "$755,000 USD", "$760,000 USD", "$765,000 USD", "$770,000 USD", "$775,000 USD", "$780,000 USD", "$785,000 USD", "$790,000 USD", "$795,000 USD",
            "$800,000 USD", "$805,000 USD", "$810,000 USD", "$815,000 USD", "$820,000 USD", "$825,000 USD", "$830,000 USD", "$835,000 USD", "$840,000 USD", "$845,000 USD",
            "$850,000 USD", "$855,000 USD", "$860,000 USD", "$865,000 USD", "$870,000 USD", "$875,000 USD", "$880,000 USD", "$885,000 USD", "$890,000 USD", "$895,000 USD",
            "$900,000 USD", "$905,000 USD", "$910,000 USD", "$915,000 USD", "$920,000 USD", "$925,000 USD", "$930,000 USD", "$935,000 USD", "$940,000 USD", "$945,000 USD",
            "$950,000 USD", "$955,000 USD", "$960,000 USD", "$965,000 USD", "$970,000 USD", "$975,000 USD", "$980,000 USD", "$985,000 USD", "$990,000 USD", "$995,000 USD",
            "$1,000,000 USD"
        ];

        return [
            "employer_id" => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement($salariesArr),
            'location' => 'Remote',
            'schedule' => 'Full Time',
            'url' => fake()->imageUrl,
            'featured' => false,
        ];
    }
}
