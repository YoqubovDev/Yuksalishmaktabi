<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Video;
use App\MoonShine\Resources\CourseResource;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Components\Layout\Box;

class VideoResource extends ModelResource
{
    protected string $model = Video::class;
    protected string $title = 'Videolar';

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Sarlavha', 'title'),
            BelongsTo::make(
                'Kurs',
                'course',
                fn ($item) => $item?->title ?? '-',
                CourseResource::class
            )->nullable(),
            Text::make('YouTube URL', 'url'),
            Date::make('Sana', 'published_at'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            Box::make([
                Text::make('Sarlavha', 'title')->required(),
                BelongsTo::make(
                    'Kurs',
                    'course',
                    fn ($item) => $item?->title ?? '-',
                    CourseResource::class
                )->nullable()->required(false),
                Text::make('YouTube URL', 'url')->required(),
                Date::make('Sana', 'published_at'),
            ]),
        ];
    }

    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Sarlavha', 'title'),
            BelongsTo::make(
                'Kurs',
                'course',
                fn ($item) => $item?->title ?? '-',
                CourseResource::class
            )->nullable(),
            Text::make('YouTube URL', 'url'),
            Date::make('Sana', 'published_at'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'url' => ['required', 'url'],
            'course_id' => ['nullable', 'exists:courses,id'],
        ];
    }
}