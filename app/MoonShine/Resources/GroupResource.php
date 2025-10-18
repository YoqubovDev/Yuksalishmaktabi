<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Group;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

class GroupResource extends ModelResource
{
    protected string $model = Group::class;
    protected string $title = 'Guruhlar';

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Nomi', 'name'),
            Text::make('Yonalish' ,'direction')->required(),
            Text::make('Oquvchi soni' ,'schedule_image'),
            Number::make('Natija foizi', 'result_percentage')->nullable(),
            Image::make(' Guruh Rasmi ', 'image'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Nomi', 'name')->required(),
            Text::make('Yonalish', 'direction')->required(),
            Text::make('Oquvchilar soni', 'schedule_image')->required(),
            Number::make('Natija foizi', 'result_percentage')->nullable(),
            Image::make('Guruh Rasmi ', 'image')->dir('groups')->removable()->required(),
        ];
    }


    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Nomi', 'name'),
            Text::make('Yonalish' ,'direction')->required(),
            Number::make('Natija foizi', 'result_percentage')->nullable(),
            Text::make('Oquvchi soni' ,'schedule_image'),
            Image::make('Guruh Rasmi ', 'image'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string'],
            'direction' => ['required'],
        ];
    }
}
