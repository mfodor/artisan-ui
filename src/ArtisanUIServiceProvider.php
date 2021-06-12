<?php

namespace Lorisleiva\ArtisanUI;

use Illuminate\Support\ServiceProvider;
use Lorisleiva\ArtisanUI\Commands\ArtisanUIInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ArtisanUIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('artisan-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasAssets()
            ->hasRoute('web')
            ->hasCommand(ArtisanUIInstallCommand::class);
    }
}
