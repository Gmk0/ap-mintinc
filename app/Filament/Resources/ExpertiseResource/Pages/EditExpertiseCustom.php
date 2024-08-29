<?php

namespace App\Filament\Resources\ExpertiseResource\Pages;

use App\Filament\Resources\ExpertiseResource;
use App\Models\Expertise;
use Filament\Forms\Components\{Grid, Repeater, Select, TextInput, Textarea, MarkdownEditor};
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\Actions\Action;

class EditExpertiseCustom extends Page
{
    protected static string $resource = ExpertiseResource::class;

    protected static string $view = 'filament.resources.expertise-resource.pages.edit-expertise-custom';

    public Expertise $record;

    public ?array $data=[];
    

    public function mount(){



        $translations=$this->record->getAllTranslations();

        

        $this->data['translations']= $translations;

        $this->data['status']=$this->record->status;
        $this->data['icon'] = $this->record->icon;
       




    }

    public  function form(Form $form): Form
    {
        return $form
            ->schema([
                // Autres champs
                // Multiplicateur pour les langues
                Repeater::make('translations')
                    ->schema([
                        Select::make('locale')
                            ->options(['fr' => 'francais', 'en' => 'Anglais'])
                ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                   
                            ->label('Locale')
                    ->live(onBlur: true)
                            ->required()
                            ->columnSpan(1),
                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->columnSpan(2),
            Textarea::make('description')->columnSpanFull(),

                        MarkdownEditor::make('content')->columnSpanFull(),
                    ])
                    ->collapsible()
                    
                    ->minItems(1)
                    ->columnSpanFull()
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

                    Grid::make()->schema([TextInput::make('icon'),

                Select::make('status')
                    ->options([
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled',
                    ])
                    ->required(),
            ])
               
            ])->statePath("data");
    }


    public function updateElement()
    {

        $this->form->validate(); 

       $data= $this->form->getState();

       try{

     

        $this->record->update([
            'icon' => $data['icon'],
            'status' => $data['status'],
            'title' => $data['translations'][0]['title'],
            'content' => $data['translations'][0]['content'],
            'description' => $data['translations'][0]['description'],
        ]);

        // Traiter les traductions
        $translationsData = $data['translations'];

        foreach ($translationsData as $translationData) {
            // Rechercher la traduction existante pour cette langue

          

                 $this->record->setTranslation('title', $translationData['locale'], $translationData['title']);
                $this->record->setTranslation('description', $translationData['locale'], $translationData['description']);
                $this->record->setTranslation('content', $translationData['locale'], $translationData['content']);



           
        }
        }
        catch(\Exception $e){

            dd($e->getMessage());
        }


    }


}
