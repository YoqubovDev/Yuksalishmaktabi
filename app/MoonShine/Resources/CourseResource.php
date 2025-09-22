<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Select;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;


class CourseResource extends ModelResource
{
    protected string $model = Course::class;

    protected string $title = 'Courses';

   
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title', 'title'),
            Text::make('Subjects', 'subjects'),
            Number::make('Student Count', 'student_count'),
            Text::make('Duration', 'duration'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Kurs nomi', 'title')->required(),
                Textarea::make('Tavsif', 'description')->required(),
                Text::make('Fanlar', 'subjects'),
                Select::make('Ikonka class', 'icon') // <-- O'zgartirildi!
                ->options([
                    'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253' => 'Tabiiy fanlar (flask)',
                    'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z' => 'Muhandislik',
                    'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z' => 'Iqtisodiyot',
                    'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z' => 'Chet tillari',
                    'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z' => 'IT va Dasturlash',
                    'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'=>'San\'at va dizayn',
                    'fas fa-palette text-2xl' => 'San’at (palette)',
                    // Yangi bo‘limlar qo’shish uchun option qo’shsa bo’ladi
                ])
                ->nullable()
                ->searchable(), // Ko'p ikonka bo'lsa qulay
                Text::make('Davomiyligi', 'duration')->default('2 yil'),
                Number::make('Talabalar soni', 'student_count')->min(0),
                Text::make('Karta rangi', 'color'),
            ])
        ];
    }

   
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Kurs nomi', 'title'),
            Textarea::make('Tavsif', 'description'),
            Text::make('Fanlar', 'subjects'),
            Text::make('Ikonka', 'icon'),
            Text::make('Davomiyligi', 'duration'),
            Number::make('Talabalar soni', 'student_count'),
            Text::make('Karta rangi', 'color'),
        ];
    }

  
    protected function rules(mixed $item): array
    {
        return [ ];
    }
}