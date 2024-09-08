<?php

namespace App\Filament\Resources\ViewElementResource\Pages;

use App\Filament\Resources\ViewElementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditViewElement extends EditRecord
{
    protected static string $resource = ViewElementResource::class;
         use EditRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
              Actions\LocaleSwitcher::make(),
        ];
    }


}
