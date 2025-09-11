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
use MoonShine\UI\Fields\Url;





/**
 * @extends ModelResource<Contact>
 */
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
            Text::make('Bus', 'bus'),
            Text::make('Telegram', 'telegram'),
            Text::make('Facebook', 'facebook'),
            Text::make('Youtube', 'youtube'),
            Text::make('Instagram', 'instagram'), 
            Url::make('Map link','map_link'),
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
                Date::make('Work time', 'work_time'),
                Date::make('Lunch time', 'lunch_time'),
                Text::make('Bus', 'bus'),
                Text::make('Telegram', 'telegram'),
                Text::make('Facebook', 'facebook'),
                Text::make('Youtube', 'youtube'),
                Text::make('Instagram', 'instagram'),
                Url::make('Map link','map_link'),

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
            Date::make('Work time', 'work_time'),
            Date::make('Lunch time', 'lunch_time'),
            Text::make('Bus', 'bus'),
            Text::make('Telegram', 'telegram'),
            Text::make('Facebook', 'facebook'),
            Text::make('Youtube', 'youtube'),
            Text::make('Instagram', 'instagram'),
            Url::make('Map link','map_link'),

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
