<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\News;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Date;

class NewsResource extends ModelResource
{
    protected string $model = News::class;
    protected string $title = 'News';

    /**
     * Index sahifasida ko‘rinadigan ustunlar
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Sarlavha', 'title')->required(),
            Text::make('Fan nomi', 'subjects')->nullable(),
            Number::make('Talabalar soni', 'student_count')->nullable(),
            Text::make('Davomiyligi', 'duration')->nullable(),
            Date::make('Chop etilgan vaqt', 'published_at')->format('Y-m-d H:i')->nullable(),
        ];
    }
    protected function formFields(): iterable
    {
        return [
            Box::make('Yangilik ma’lumotlari', [

                Text::make('Sarlavha', 'title')
                    ->placeholder("Yangilik sarlavhasi — qisqa va aniq (50–80 belgi).")
                    ->required(),

                Textarea::make('To‘liq matn', 'content')
                    ->nullable()
                    ->placeholder("To‘liq maqola matni. WYSIWYG uchun Trix yoki Editor field bilan almashtirish mumkin."),

                Image::make('Rasm', 'image')
                    ->disk('public')
                    ->dir('news')
                    ->nullable(),

                Date::make('Chop etilgan vaqt', 'published_at')
                    ->nullable(),
            ]),
        ];
    }

    /**
     * Detail (ko‘rish) sahifasi uchun maydonlar
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Sarlavha', 'title'),
            Textarea::make('To‘liq matn', 'content')->nullable(),
            Image::make('Rasm', 'image')->nullable(),
            Date::make('Chop etilgan vaqt', 'published_at')->nullable(),
        ];
    }

    /**
     * Validation qoidalari
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:news,slug,' . ($item->id ?? 'NULL')],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
            'published_at' => ['nullable', 'date'],
        ];
    }
}
