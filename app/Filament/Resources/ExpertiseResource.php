<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpertiseResource\Pages;
use App\Filament\Resources\ExpertiseResource\RelationManagers;
use App\Models\Expertise;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;

class ExpertiseResource extends Resource
{
    use Translatable;
    protected static ?string $model = Expertise::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            // Autres champs


            Forms\Components\TextInput::make('title')
                ->label('Title')
                ->required()
                ->columnSpan(2),
            Forms\Components\Textarea::make('description')->columnSpanFull(),

            Forms\Components\MarkdownEditor::make('content')->columnSpanFull(),            Forms\Components\TextInput::make('icon'),

            Forms\Components\Select::make('status')
            ->options([
                'enabled' => 'Enabled',
                'disabled' => 'Disabled',
            ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
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
              //  Tables\Actions\Action::make('modifier')->url(fn (Expertise $record): string => static::getUrl('edit-expertise',['record' => $record])),
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

    protected function handleRecordCreation(array $data): Expertise
    {


        $result=static::getModel()::create($data);

        return $result;
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExpertises::route('/'),
            'create' => Pages\CreateExpertise::route('/create'),
            'edit' => Pages\EditExpertise::route('/{record}/edit'),
            'edit-expertise'=>Pages\EditExpertiseCustom::route('/{record}/edit-expertise'),
        ];
    }
}
