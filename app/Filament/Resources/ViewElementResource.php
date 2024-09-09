<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ViewElementResource\Pages;
use App\Filament\Resources\ViewElementResource\RelationManagers;
use App\Models\ViewElement;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;


class ViewElementResource extends Resource
{
     use Translatable;
    protected static ?string $model = ViewElement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Admin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('about')
                    ->columnSpanFull(),
                Forms\Components\Repeater::make('team')
                ->schema([
                    TextInput::make('name'),
                TextInput::make('position'),

                FileUpload::make('photo')
                ->label('Photo')
                    ->image()
                    ->required()
                    ->disk('public') // Assurez-vous d'avoir le bon disque configuré
                    ->directory('members/photos'),

                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('about')
                ->searchable(),
            Tables\Columns\TextColumn::make('team')
            ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListViewElements::route('/'),
            'create' => Pages\CreateViewElement::route('/create'),
            'edit' => Pages\EditViewElement::route('/{record}/edit'),
        ];
    }
}
