<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\PhotoCard;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<PhotoCard>
 */
class PhotoCardResource extends ModelResource
{
    protected string $model = PhotoCard::class;

    protected string $title = 'Yutuqlar';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Nimadan olganligi', 'title'),
            Text::make('Qisqacha nomi', 'description'),
            Text::make('Ism', 'author'),
            Image::make('Rasm', 'image'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make('Foto kartochka maʼlumotlari', [
                Text::make('Sabab', 'title')->required(),
                Text::make('Tavsif', 'description'),
                Text::make('Ism', 'author'),
                Image::make('Rasm', 'image')->removable(),
            ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Sabab', 'title'),
            Text::make('Tavsif', 'description'),
            Text::make('Ism', 'author'),
            Image::make('Rasm', 'image'),
        ];
    }

    /**
     * @param PhotoCard $item
     *
     * @return array<string, string[]|string>
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image'],
        ];
    }
}
