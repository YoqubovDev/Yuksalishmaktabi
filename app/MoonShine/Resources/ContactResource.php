<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Phone;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Number;

class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Contacts';
    
    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Address', 'address'),
            Phone::make('Phone', 'phone'),
            Phone::make('Fax', 'fax'),
            Text::make('Email', 'email'),
            Date::make('Work time', 'work_time'),
            Date::make('Lunch time', 'lunch_time'),
            Number::make('Bus', 'bus'),
            Number::make('Mashrut','mashrut'),
            Text::make('Telegram', 'telegram'),
            Text::make('Facebook', 'facebook'),
            Text::make('Youtube', 'youtube'),
            Text::make('Instagram', 'instagram'), 
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Address', 'address'),
                Phone::make('Phone', 'phone'),
                Phone::make('Fax', 'fax'),
                Text::make('Email', 'email'),
                Text::make('Work time', 'work_time')
                    ->placeholder('Masalan: 09:00 - 18:00'),

                Text::make('Lunch time', 'lunch_time')
                    ->placeholder('Masalan: 13:00 - 14:00'),

                Number::make('Bus', 'bus'),
                Number::make('Mashrut','marshrut'),
                Text::make('Telegram', 'telegram'),
                Text::make('Facebook', 'facebook'),
                Text::make('Youtube', 'youtube'),
                Text::make('Instagram', 'instagram'),

            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Address', 'address'),
            Phone::make('Phone', 'phone'),
            Phone::make('Fax', 'fax'),
            Text::make('Email', 'email'),
            Text::make('Work time', 'work_time'),
            Text::make('Lunch time', 'lunch_time'),
            Number::make('Bus', 'bus'),
            Number::make('Mashrut','mashrut'),
            Text::make('Telegram', 'telegram'),
            Text::make('Facebook', 'facebook'),
            Text::make('Youtube', 'youtube'),
            Text::make('Instagram', 'instagram'),

        ];
    }

    /**
     * @param Contact $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
