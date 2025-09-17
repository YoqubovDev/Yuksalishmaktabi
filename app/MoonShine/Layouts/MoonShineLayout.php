<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};

    use MoonShine\MenuManager\MenuGroup;
    use MoonShine\MenuManager\MenuItem;
    use App\MoonShine\Resources\GroupResource;
    use App\MoonShine\Resources\HomeSliderResource;
    use App\MoonShine\Resources\PhotoCardResource;
    use App\MoonShine\Resources\QabulrasmiResource;
    use App\MoonShine\Resources\SliderResource;
    use App\MoonShine\Resources\TeacherResource;
    use App\MoonShine\Resources\VideoResource;
    use App\MoonShine\Resources\UserResource;



final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make('System', [
                MenuItem::make('Admins', MoonShineUserResource::class),
                MenuItem::make('Roles', MoonShineUserRoleResource::class),
            ]),

            MenuGroup::make('O\'qituvchi', [
                MenuItem::make('TeacherResource', TeacherResource::class)
            ]),

            MenuItem::make('GroupResource',GroupResource::class),
            MenuItem::make('HomeSliderResource', HomeSliderResource::class),
            MenuItem::make('PhotoCardResource', PhotoCardResource::class),
            MenuItem::make('QabulrasmiResource', QabulrasmiResource::class),
            MenuItem::make('SliderResource',SliderResource::class),
            MenuItem::make('VideoResource', VideoResource::class),
            MenuItem::make('UserResource', UserResource::class),
            


        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}