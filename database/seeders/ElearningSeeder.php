<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Video;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Hash;

class ElearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@elearning.com',
            'username' => 'admin',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Create sample instructor
        $instructor = User::create([
            'name' => 'John Doe',
            'email' => 'instructor@elearning.com',
            'username' => 'instructor',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Create sample student
        $student = User::create([
            'name' => 'Jane Smith',
            'email' => 'student@elearning.com',
            'username' => 'student',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Create categories
        $categories = [
            ['name' => 'Web Development', 'description' => 'Learn web development technologies'],
            ['name' => 'Mobile Development', 'description' => 'Build mobile applications'],
            ['name' => 'Data Science', 'description' => 'Data analysis and machine learning'],
            ['name' => 'Design', 'description' => 'UI/UX and graphic design'],
            ['name' => 'Business', 'description' => 'Business and entrepreneurship'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Create sample courses
        $webDevCategory = Category::where('name', 'Web Development')->first();
        
        $course1 = Course::create([
            'title' => 'Laravel Masterclass',
            'description' => 'Complete Laravel development course from beginner to advanced',
            'thumbnail' => 'laravel-course.jpg',
            'category_id' => $webDevCategory->id,
            'created_by' => $instructor->id,
        ]);

        $course2 = Course::create([
            'title' => 'React Fundamentals',
            'description' => 'Learn React.js from scratch with hands-on projects',
            'thumbnail' => 'react-course.jpg',
            'category_id' => $webDevCategory->id,
            'created_by' => $instructor->id,
        ]);

        // Create sample videos
        Video::create([
            'course_id' => $course1->id,
            'title' => 'Introduction to Laravel',
            'description' => 'Getting started with Laravel framework',
            'video_url' => 'https://example.com/videos/laravel-intro.mp4',
            'duration' => 1200,
            'order' => 1,
        ]);

        Video::create([
            'course_id' => $course1->id,
            'title' => 'Laravel Routing',
            'description' => 'Understanding Laravel routing system',
            'video_url' => 'https://example.com/videos/laravel-routing.mp4',
            'duration' => 1800,
            'order' => 2,
        ]);

        Video::create([
            'course_id' => $course2->id,
            'title' => 'React Components',
            'description' => 'Building your first React component',
            'video_url' => 'https://example.com/videos/react-components.mp4',
            'duration' => 1500,
            'order' => 1,
        ]);

        // Create sample enrollment
        Enrollment::create([
            'user_id' => $student->id,
            'course_id' => $course1->id,
            'enrolled_at' => now(),
        ]);

        echo "✅ Database seeded successfully!\n";
        echo "📧 Login credentials:\n";
        echo "   Admin: admin@elearning.com / password123\n";
        echo "   Instructor: instructor@elearning.com / password123\n";
        echo "   Student: student@elearning.com / password123\n";
    }
}
