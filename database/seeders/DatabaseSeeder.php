<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    public function run(): void
    {
        // Birinchi kursga videolar
        $course1 = Course::first();
        
        if ($course1) {
            Video::create([
                'title' => 'Kirish darsi - Dasturlash asoslari',
                'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'published_at' => now(),
                'course_id' => $course1->id
            ]);
            
            Video::create([
                'title' => '2-dars - O\'zgaruvchilar va ma\'lumot turlari',
                'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'published_at' => now()->subDays(7),
                'course_id' => $course1->id
            ]);
        }
    }
}