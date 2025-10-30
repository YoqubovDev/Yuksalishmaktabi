<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Achievement;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Fields\Image;

class AchievementResource extends ModelResource
{
    protected string $model = Achievement::class;
    protected string $title = 'Yutuqlar';

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Ism / Sarlavha', 'name'),
            Text::make('Badge', 'badge'),
            Text::make('Category', 'category'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Ism / Sarlavha', 'name')->required()
                ->placeholder('Masalan: Dasturlash bo‘yicha sertifikat'),
            Text::make('Badge', 'badge')
                ->placeholder('Masalan: Oltin'),
            Textarea::make('Tavsif', 'description')
                ->placeholder('Masalan: Python va algoritmlar bo‘yicha xalqaro kursni muvaffaqiyatli yakunladi.'),
            Image::make('Rasm', 'image'),
            Text::make('Category', 'category')
                ->placeholder('Masalan: IT'),
        ];
    }

    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Ism / Sarlavha', 'name'),
            Text::make('Badge', 'badge'),
            Textarea::make('Tavsif', 'description'),
            Image::make('Rasm', 'image'),
            Text::make('Category', 'category'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required'],
        ];
    }
}