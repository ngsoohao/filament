<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostOverView extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            Stat::make('Posts', Post::count()),
        ];
    }
}
