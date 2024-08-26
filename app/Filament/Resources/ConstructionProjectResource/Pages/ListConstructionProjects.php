<?php

namespace App\Filament\Resources\ConstructionProjectResource\Pages;

use App\Filament\Resources\ConstructionProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConstructionProjects extends ListRecords
{
    protected static string $resource = ConstructionProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
