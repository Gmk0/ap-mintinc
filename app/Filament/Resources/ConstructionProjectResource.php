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
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;


class ConstructionProjectResource extends Resource
{
    use Translatable;
    protected static ?string $model = ConstructionProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),


          TiptapEditor::make('description')
                    ->profile('simple')
                  //  ->tools([]) // individual tools to use in the editor, overwrites profile
                   // ->disk('string') // optional, defaults to config setting
                   // ->directory('string or Closure returning a string') // optional, defaults to config setting
                    //->acceptedFileTypes() // optional, defaults to config setting
                    ->maxSize('1024') // optional, defaults to config setting
                    ->output(TiptapOutput::Html) // optional, change the format for saved data, default is html
                    ->maxContentWidth('5xl')
                    ->columnSpanFull(),

            SpatieMediaLibraryFileUpload::make('images')
            ->collection('projets')
            ->preserveFilenames()
            ->imageEditor()
            ->imagePreviewHeight('100')
                ->panelLayout('grid')

             ->multiple()
                ->responsiveImages()
              ->reorderable()
              ->columnSpanFull(),
            Forms\Components\TextInput::make('price')->numeric(),


                Forms\Components\DatePicker::make('start_date'),
                Forms\Components\DatePicker::make('end_date'),
                Forms\Components\TextInput::make('localisation')
                    ->columnSpanFull(),
            Forms\Components\TextInput::make('client'),
              Forms\Components\Select::make('category_id')
            ->relationship('category','name'),

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
