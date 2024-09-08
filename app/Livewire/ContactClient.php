<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactClient extends Component
{

    public $contact=[];
    public function render()
    {
        return view('livewire.contact-client');
    }

    public function save()
    {

        $this->validate([
            'contact.nom' => 'required',
            'contact.email' => 'required',
            'contact.telephone' => 'required',
            'contact.sujet' => 'required',
            'contact.message' => 'required',
        ]);

        Contact::create($this->contact);

    }
}
