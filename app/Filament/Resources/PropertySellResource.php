<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertySellResource\Pages;
use App\Filament\Resources\PropertySellResource\RelationManagers;
use App\Models\PropertySell;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropertySellResource extends Resource
{
    protected static ?string $model = PropertySell::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([Tables\Columns\TextColumn::make('title'),
            Tables\Columns\TextColumn::make('description'),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPropertySells::route('/'),
            'create' => Pages\CreatePropertySell::route('/create'),
            'edit' => Pages\EditPropertySell::route('/{record}/edit'),
        ];
    }
}
