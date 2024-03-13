<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Danhmuc;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Danhmuc>
 */
class DanhmucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Danhmuc::class;
    public function definition()
    {
        return [
            'tendanhmuc' => $this ->faker->name(),
            'dmthietyeu' => true,
            'hang_id' => random_int(1,10),
        ];
    }
}
