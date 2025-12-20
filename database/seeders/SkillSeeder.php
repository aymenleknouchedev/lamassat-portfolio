<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'UI Design',
                'description' => 'Creating beautiful and intuitive user interfaces',
                'icon' => 'fa-palette',
            ],
            [
                'name' => 'Web Design',
                'description' => 'Designing responsive and modern websites',
                'icon' => 'fa-globe',
            ],
            [
                'name' => 'Branding',
                'description' => 'Building strong and memorable brand identities',
                'icon' => 'fa-tag',
            ],
            [
                'name' => 'Typography',
                'description' => 'Expert in font selection and type design',
                'icon' => 'fa-text-height',
            ],
            [
                'name' => 'Mobile App Design',
                'description' => 'Designing engaging mobile experiences',
                'icon' => 'fa-mobile',
            ],
            [
                'name' => 'UX Research',
                'description' => 'User research and usability testing',
                'icon' => 'fa-search',
            ],
        ];

        foreach ($skills as $skill) {
            Skill::firstOrCreate(
                ['name' => $skill['name']],
                [
                    'description' => $skill['description'],
                    'icon' => $skill['icon'],
                ]
            );
        }
    }
}
