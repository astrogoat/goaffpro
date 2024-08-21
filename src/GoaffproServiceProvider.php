<?php

namespace Astrogoat\Goaffpro;

use Astrogoat\Goaffpro\Settings\GoaffproSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Spatie\LaravelPackageTools\Package;

class GoaffproServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('goaffpro')
            ->settings(GoaffproSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->includeFrontendViews(function (IncludeFrontendViews $frontendViews) {
                return $frontendViews->addToHead('goaffpro::script');
            });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('goaffpro')->hasConfigFile()->hasViews();
    }
}
