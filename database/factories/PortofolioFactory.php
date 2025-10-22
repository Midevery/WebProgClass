<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portofolio>
 */
class PortofolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'Website e-commerce',
            'Mobile app development',
            'AI text classification',
            'Extended reality proejct',
            'Machine learning pipeline'
        ];
        $descriptions=[
            'Sistem E commer dengan fitur pembayaran terintegrasi',
            'Aplikasi mobile native dengan performa optimal',
            'Model klasifikasi teks dengan SOTA',
            'Pengalaman immersive VR/AR untuk edukasi',
            'Pipeline otomatis untuk training model ML'
        ];

        return [
            //
            //ambil random id dari database, asumsi sudah ada data
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'title' => $this->faker->unique()->randomElement($titles),
            'description' => $this->faker->unique()->randomElement($descriptions),
            'image' => 'images/teamMeeting.jpg'
        ];
    }
}
