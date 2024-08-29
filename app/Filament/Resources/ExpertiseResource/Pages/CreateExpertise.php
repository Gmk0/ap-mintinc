<?php

namespace App\Filament\Resources\ExpertiseResource\Pages;

use App\Filament\Resources\ExpertiseResource;
use App\Models\Expertise;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExpertise extends CreateRecord
{
    protected static string $resource = ExpertiseResource::class;

    use CreateRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }


   
}
