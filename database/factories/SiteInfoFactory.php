<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteInfo>
 */
class SiteInfoFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => 'Borisdessy',
            'fav_icon' => 'favicons/default.jpg',
            'copy_right_text' => 'All rights are reserved by borisdessy',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
