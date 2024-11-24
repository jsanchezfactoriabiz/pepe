<?php

namespace Jsanchezfactoriabiz\Pepe;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentAsset;

class Pepe implements Plugin
{
    public function getId(): string
    {
        return 'pepe';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('pepe', __DIR__ . '/../resources/dist/pepe.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('pepe');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
