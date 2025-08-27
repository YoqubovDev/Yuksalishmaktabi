<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\SliderResource;
use App\MoonShine\Resources\VideoResource;
use App\MoonShine\Resources\PhotoCardResource;
use App\MoonShine\Resources\GroupResource;
use App\MoonShine\Resources\TeacherResource;
use App\MoonShine\Resources\HomeSliderResource;
use App\MoonShine\Resources\QabulrasmiResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                SliderResource::class,
                VideoResource::class,
                PhotoCardResource::class,
                GroupResource::class,
                TeacherResource::class,
                HomeSliderResource::class,
                QabulrasmiResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
