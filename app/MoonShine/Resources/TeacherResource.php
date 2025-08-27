<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Teacher;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

class TeacherResource extends ModelResource
{
    protected string $model = Teacher::class;
    protected string $title = 'O‘qituvchilar';

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Ism', 'name'),
            Text::make('Fan', 'subject'),
            Text::make('Bio' , 'bio'),
            Image::make('Rasm', 'image'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            Box::make([
                Text::make('Ism', 'name')->required(),
                Text::make('Fan', 'subject'),
                Text::make('Bio' , 'bio')->required(),
                Image::make('Rasm', 'image')->removable(),
            ]),
        ];
    }

    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Ism', 'name'),
            Text::make('Fan', 'subject'),
            Text::make('Bio' , 'bio'),
            Image::make('Rasm', 'image'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string'],
        ];
    }
}
