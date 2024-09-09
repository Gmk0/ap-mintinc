<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\LivewireFilepond\WithFilePond;

class FileUpload extends Component
{
    use WithFilePond;
    public function render()
    {
        return view('livewire.file-upload',[
            'categories' => \App\Models\Category::all(),]);
    }
}
