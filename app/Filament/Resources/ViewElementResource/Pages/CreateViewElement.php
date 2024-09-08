<?php

namespace App\Filament\Resources\ViewElementResource\Pages;

use App\Filament\Resources\ViewElementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateViewElement extends CreateRecord
{
    protected static string $resource = ViewElementResource::class;

     use CreateRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
