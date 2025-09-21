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
                Text::make('Ikonka (class yoki SVG)', 'icon'),
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