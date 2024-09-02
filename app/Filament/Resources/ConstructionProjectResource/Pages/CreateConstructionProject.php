<?php

namespace App\Filament\Resources\ConstructionProjectResource\Pages;

use App\Filament\Resources\ConstructionProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateConstructionProject extends CreateRecord
{
    protected static string $resource = ConstructionProjectResource::class;

    use CreateRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
