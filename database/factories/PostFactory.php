<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $title = $this->faker->sentence(6);
        $description = $this->faker->sentence(24);
        $content = $this->faker->paragraphs(5, true); // gabungkan jadi satu string
        $category = $this->faker->randomElement(['Engineering', 'Robotics', 'AI', 'Data']);
        $thumbnail = 'images/image-' . rand(1,5) . '.png';
        $read_time = rand(3,15); // menit
        $published_at = $this->faker->dateTimeBetween('-1 year', 'now');

        return [
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'category' => $category,
            'thumbnail' => $thumbnail,
            'read_time' => $read_time,
            'published_at' => $published_at,
        ];
    }
}
