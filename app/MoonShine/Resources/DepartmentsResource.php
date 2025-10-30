<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Departments;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Select; // <-- Qo'shildi!
use MoonShine\Laravel\Resources\ModelResource;

class DepartmentsResource extends ModelResource
{
    protected string $model = Departments::class;

    protected string $title = 'Departments';

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Bo‘lim nomi', 'name'),
            Text::make('Ikonka class', 'icon'),
            Textarea::make('Taʼrif', 'description'),
            Number::make('O‘qituvchilar soni', 'teachers_count'),
        ];
    }

    protected function formFields(): iterable
    {
        return [
            Text::make('Bo‘lim nomi', 'name')->required(),
            Select::make('Ikonka class', 'icon') // <-- O'zgartirildi!
                ->options([
                    'fas fa-flask text-2xl' => 'Tabiiy fanlar (flask)',
                    'fas fa-calculator text-2xl' => 'Matematika (calculator)',
                    'fas fa-language text-2xl' => 'Chet tillari (language)',
                    'fas fa-book text-2xl' => 'Gumanitar fanlar (book)',
                    'fas fa-laptop-code text-2xl' => 'Texnika (laptop-code)',
                    'fas fa-palette text-2xl' => 'San’at (palette)',
                    // Yangi bo‘limlar qo’shish uchun option qo’shsa bo’ladi
                ])
                ->nullable()
                ->searchable(), // Ko'p ikonka bo'lsa qulay
            Textarea::make('Taʼrif', 'description'),
            Number::make('O‘qituvchilar soni', 'teachers_count')->default(0),
        ];
    }

    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Bo‘lim nomi', 'name'),
            Text::make('Ikonka class', 'icon'),
            Textarea::make('Taʼrif', 'description'),
            Number::make('O‘qituvchilar soni', 'teachers_count'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'teachers_count' => ['nullable', 'integer', 'min:0'],
        ];
    }
}