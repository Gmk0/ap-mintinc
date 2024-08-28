<?php

namespace App\Filament\Resources\ExpertiseResource\Pages;

use App\Filament\Resources\ExpertiseResource;
use App\Models\Expertise;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExpertise extends CreateRecord
{
    protected static string $resource = ExpertiseResource::class;


    protected function afterValidate(): void
    {


        $data=$this->form->getState();



        $saved=[
            'title'=> $data['translations'][0]['title'],
            'description' => $data['translations'][0]['description'],
            'status'=>$data['status'],
            'icon'=>$data['icon']
            ];


            try{


            $expertise = new Expertise();

            $expertise=$expertise->create($saved);



            $translations = $data['translations'];

            // Enregistrer les traductions dans la base de données
            foreach ($translations as $field => $translate) {

                 $expertise->setTranslation('title', $translate['locale'], $translate['title']);
                $expertise->setTranslation('description', $translate['locale'], $translate['description']);


            }
            $this->form->fill();

            }catch(\Exception $e){

                dd($e->getMessage());


            }




        $this->halt;


        // Runs after the form fields are validated when the form is submitted.
    }
}
