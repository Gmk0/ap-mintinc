<?php

namespace App\Filament\Resources\PropertySellResource\Pages;

use App\Filament\Resources\PropertySellResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPropertySells extends ListRecords
{
    protected static string $resource = PropertySellResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
