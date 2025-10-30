<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Course;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Select;
use MoonShine\Laravel\Fields\Relationships\HasMany;

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
                Text::make('Kurs nomi', 'title')
                    ->placeholder('Masalan: Chet tillari')
                    ->required(),
                Textarea::make('Tavsif', 'description')
                    ->required(),
                Text::make('Fanlar', 'subjects')
                    ->placeholder('Masalan: Ingliz, Italyan, Rus tillari'),
                Select::make('Ikonka class', 'icon')
                    ->options([
                        // Har optionning kaliti noyob bo'lishi kerak
                        'flask' => 'Tabiiy fanlar (flask)',
                        'engineering' => 'Muhandislik',
                        'economics' => 'Iqtisodiyot',
                        'languages' => 'Chet tillari',
                        'it' => 'IT va Dasturlash',
                        'art' => 'San\'at va dizayn',
                        'fas fa-palette text-2xl' => 'San’at (palette)',
                    ])
                    ->nullable()
                    ->searchable(),
                Text::make('Davomiyligi', 'duration'),
                Number::make('Talabalar soni', 'student_count')->min(0),
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
            HasMany::make('Videolar', 'videos', resource: VideoResource::class),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [];
    }
}