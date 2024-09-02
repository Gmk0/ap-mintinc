<?php

namespace App\Filament\Resources\ConstructionProjectResource\Pages;

use App\Filament\Resources\ConstructionProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConstructionProject extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = ConstructionProjectResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }




}
