<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Slider;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

class SliderResource extends ModelResource
{
    protected string $model = Slider::class;
    protected string $title = 'Sliderlar';

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title', 'title'),
            Text::make('Description', 'description'),
            Image::make('Image', 'image'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            Box::make([
                Text::make('Title', 'title')->required(),
                Text::make('Description', 'description'),
                Image::make('Image', 'image')->removable()
            ]),
        ];
    }

    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Title', 'title'),
            Text::make('Description', 'description'),
            Image::make('Image', 'image'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string'],
            'image' => ['nullable', 'image'],
        ];
    }
}
