<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all skills or create some
        $skills = Skill::all();
        
        if ($skills->isEmpty()) {
            // Create sample skills
            $skills = Skill::factory(6)->create();
        }

        // Create sample projects
        $projects = [
            [
                'title' => 'E-Commerce Platform Redesign',
                'description' => 'Complete redesign of a modern e-commerce platform with focus on user experience and conversion optimization.',
                'url' => 'https://example.com/project1',
                'image' => 'projects/ecommerce.jpg',
                'pdf' => 'projects/ecommerce-portfolio.pdf',
                'status' => 'completed',
                'user_id' => 1,
            ],
            [
                'title' => 'Mobile App UI Kit',
                'description' => 'Comprehensive UI kit and design system for mobile applications with 200+ components.',
                'url' => 'https://example.com/project2',
                'image' => 'projects/mobile-ui.jpg',
                'pdf' => 'projects/mobile-ui-portfolio.pdf',
                'status' => 'completed',
                'user_id' => 1,
            ],
            [
                'title' => 'Corporate Website',
                'description' => 'Modern corporate website with interactive elements and smooth animations.',
                'url' => 'https://example.com/project3',
                'image' => 'projects/corporate.jpg',
                'pdf' => 'projects/corporate-portfolio.pdf',
                'status' => 'completed',
                'user_id' => 1,
            ],
            [
                'title' => 'SaaS Dashboard Design',
                'description' => 'Complex dashboard interface for a SaaS platform with real-time data visualization.',
                'url' => 'https://example.com/project4',
                'image' => 'projects/saas-dashboard.jpg',
                'pdf' => 'projects/saas-portfolio.pdf',
                'status' => 'in progress',
                'user_id' => 1,
            ],
            [
                'title' => 'Travel App Design',
                'description' => 'User-centric travel booking app with beautiful design and intuitive navigation.',
                'url' => 'https://example.com/project5',
                'image' => 'projects/travel-app.jpg',
                'pdf' => 'projects/travel-app-portfolio.pdf',
                'status' => 'completed',
                'user_id' => 1,
            ],
            [
                'title' => 'Fintech Platform',
                'description' => 'Innovative fintech solution with secure payment processing and wealth management features.',
                'url' => 'https://example.com/project6',
                'image' => 'projects/fintech.jpg',
                'pdf' => 'projects/fintech-portfolio.pdf',
                'status' => 'completed',
                'user_id' => 1,
            ],
        ];

        foreach ($projects as $index => $projectData) {
            $project = Project::create($projectData);
            
            // Attach random skills to each project
            $randomSkills = $skills->random(rand(1, 3))->pluck('id');
            $project->skills()->attach($randomSkills);
        }
    }
}
