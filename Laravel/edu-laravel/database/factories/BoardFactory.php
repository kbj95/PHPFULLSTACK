<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    // 팩토리 생성 : php artisan make:factory BoardFactory --model=Board
    // 팩토리 실행 : php artisan db:seed

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 years');
        return [
            'category' => $this->faker->randomNumber(1) // randomNumber(자리수) ex)randomNumber(2)면 0~99까지
            ,'btitle' => $this->faker->realText(100)
            ,'bcontent' => $this->faker->realText(2000)
            ,'created_at' => $date
            ,'updated_at' => $date
        ];
    }
}
