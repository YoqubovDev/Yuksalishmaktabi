<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Qabulrasmi;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;

class QabulrasmiResource extends ModelResource
{
    protected string $model = Qabulrasmi::class;
    protected string $title = 'Qabul rasmi';

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Rasm', 'image')
                ->dir('qabul_rasmlari')
                ->disk('public'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            Image::make('Rasm', 'image')
                ->dir('qabul_rasmlari')
                ->disk('public')
                ->removable()
                ->required(),
        ];
    }

    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Image::make('Rasm', 'image')
                ->dir('qabul_rasmlari')
                ->disk('public'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'image' => ['required', 'image'],
        ];
    }
}
