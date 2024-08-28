<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpertiseResource\Pages;
use App\Filament\Resources\ExpertiseResource\RelationManagers;
use App\Models\Expertise;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExpertiseResource extends Resource
{
    protected static ?string $model = Expertise::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Autres champs


                // Multiplicateur pour les langues
                Forms\Components\Repeater::make('translations')
                ->schema([
                    Forms\Components\Select::make('locale')
                    ->options(['fr'=>'francais',
                    'en'=>'Anglais','pr'=>'portuguese'])
                    ->default(app()->getLocale())
                    ->live(onBlur:true)
                    ->label('Locale')
                    ->required()
                        ->columnSpan(1),
                    Forms\Components\TextInput::make('title')
                        ->label('Title')
                        ->required()
                        ->columnSpan(2),

                Forms\Components\MarkdownEditor::make('description')->columnSpanFull(),
                ])
                    ->collapsible()
                    ->defaultItems(1)
                    ->minItems(1)
                    ->columnSpanFull()
                 ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                    ->maxItems(2)
                    ->deletable(false) 
                     ->extraItemActions([
                Action::make('deleteItem')
                ->icon('heroicon-m-trash')
                ->color('danger')
                ->action(function (array $arguments, Repeater $component): void {

                    $items = $component->getState();
               
                     if($arguments['item'] !== 0)
                    {
                        unset($items[$arguments['item']]);
                    }
                    
                    $component->state($items);
                    $component->callAfterStateUpdated();
                  
                }),
            ])
                    
                  
           
            ->itemLabel(fn(array $state): ?string => $state['locale'] ?? null)
                    ->maxItems(2)
                    ->required()
                    ->columns(3),
            Forms\Components\TextInput::make('icon'),

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
                Tables\Actions\Action::make('modifier')
                ->url(fn (Expertise $record): string => static::getUrl('edit-expertise',['record' => $record])),
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
