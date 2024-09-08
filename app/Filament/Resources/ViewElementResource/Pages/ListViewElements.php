<?php

namespace App\Filament\Resources\ViewElementResource\Pages;

use App\Filament\Resources\ViewElementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListViewElements extends ListRecords
{
    protected static string $resource = ViewElementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
