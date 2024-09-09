<?php

namespace App\Filament\Widgets;

use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget\Stat;

class AdvancedStatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('Total proprietes', "124k")->icon('heroicon-o-home')
                //->backgroundColor('info')
               // ->progress(69)
               // ->progressBarColor('success')
                ->iconBackgroundColor('success')
                ->chartColor('success')
                ->iconPosition('start')
               // ->description('The users in this period')
              //  ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('success')
                ->iconColor('success'),

            Stat::make('Total projets', "1k")->icon('heroicon-o-home')
            //->backgroundColor('info')
           // ->progress(69)
                // ->progressBarColor('success')
                ->iconBackgroundColor('success')
                ->chartColor('success')
                ->iconPosition('start')
                // ->description('The users in this period')
                //  ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('success')
                ->iconColor('success'),
            //
        ];
    }
}
