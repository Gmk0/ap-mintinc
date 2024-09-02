<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConstructionProjectResource\Pages;
use App\Filament\Resources\ConstructionProjectResource\RelationManagers;
use App\Models\ConstructionProject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ConstructionProjectResource extends Resource
{
    use Translatable;
    protected static ?string $model = ConstructionProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),

            Forms\Components\RichEditor::make('content')
                ->columnSpanFull(),

            SpatieMediaLibraryFileUpload::make('images')
            ->collection('projets')
             ->multiple()
                ->responsiveImages()
    ->reorderable()
    ->columnSpanFull(),


                Forms\Components\DatePicker::make('start_date'),
                Forms\Components\DatePicker::make('end_date'),
                Forms\Components\Textarea::make('localisation')
                    ->columnSpanFull(),
            Forms\Components\TextInput::make('client'),
            Forms\Components\TextInput::make('category'),
            Forms\Components\TextInput::make('const')->numeric(),
                Forms\Components\Toggle::make('afficher')
                    ->required(),
                Forms\Components\TextInput::make('property_id')
                ->label('relier une maison')
                    ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('property_id')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListConstructionProjects::route('/'),
            'create' => Pages\CreateConstructionProject::route('/create'),
            'edit' => Pages\EditConstructionProject::route('/{record}/edit'),
        ];
    }
}
