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
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Date;

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
            Text::make('Lunch Time', 'lunch_time'),
            Text::make('Work Time', 'work_time'),
            Number::make('Bus', 'bus'),
            Number::make('Mashrut','marshrut'),
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

                Text::make('Lunch Time', 'lunch_time'),
                Text::make('Work Time', 'work_time'),
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

            Text::make('Lunch Time', 'lunch_time'),
            Text::make('Work Time', 'work_time'),

            Number::make('Bus', 'bus'),
            Number::make('Mashrut','marshrut'),
            Text::make('Telegram', 'telegram'),
            Text::make('Facebook', 'facebook'),
            Text::make('Youtube', 'youtube'),
            Text::make('Instagram', 'instagram'),
        ];
    }

    protected function rules(mixed $item): array
    {
        return [
            'email' => ['nullable','email'],
            'phone' => ['nullable','string','max:20'],
        ];
    }
}
