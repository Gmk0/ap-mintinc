<?php

namespace App\Filament\Resources\PropertySellResource\Pages;

use App\Filament\Resources\PropertySellResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropertySell extends EditRecord
{
    protected static string $resource = PropertySellResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
