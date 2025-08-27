<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\HomeSlider;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Textarea;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Decorations\Box;

class HomeSliderResource extends ModelResource
{
    protected string $model = HomeSlider::class;

    protected string $title = 'Home Slider';

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Ism', 'name'),
            Text::make('Fan', 'subject'),
            Image::make('Rasm', 'image'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            Text::make('Ism', 'name')->required(),
            Text::make('Fan', 'subject')->required(),
            Image::make('Rasm', 'image')
                ->dir('homeslider') // storage/app/public/homeslider
                ->disk('public')
                ->allowedExtensions(['jpg', 'jpeg', 'png', 'webp']),
            Textarea::make('Bio', 'bio')->nullable(),
        ];
    }


    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Ism', 'name'),
            Text::make('Fan', 'subject'),
            Image::make('Rasm', 'image'),
            Textarea::make('Bio', 'bio'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'image' => ['nullable', 'image'],
            'bio' => ['nullable', 'string'],
        ];
    }
}
