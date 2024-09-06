<?php

namespace App\Livewire\Propertys;

use App\Models\Category;
use App\Models\Property;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class AllProperties extends Component
{
    use WithPagination;
    public $category;
    public $price;
    public $location;
    public $search;
    public $sort = 'Newest'; // Par défaut, on trie par 'N



    // Ajouter des query strings
    protected $queryString = [
        'category' => ['except' => ''],
        'price' => ['except' => ''],
        'location' => ['except' => ''],
        'search' => ['except' => ''],
        "sort" => ['except' => ''],
    ];

    // Récupérer la catégorie depuis l'URL
    public function mount($category = null)
    {
        if ($category) {
            $this->category = $category;
        }
    }

    #[Title('Proprietes')]
    public function render()
    {
        // Construire la requête avec les filtres
        $query = Property::query();

        if ($this->category) {
            $query->whereHas('category',function($q){

                $q->where('name','=',$this->category);
            });
        }

        if ($this->price) {
            $query->where('price', '<=', $this->price);
        }

        if ($this->location) {
            $query->where(function ($q) {
                $q->where('country', 'like', '%' . $this->location . '%')
                ->orWhere('city', 'like', '%' . $this->location . '%')
                ->orWhere('address', 'like', '%' . $this->location . '%');
            });
        }


        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }
        // Appliquer le tri en fonction de la sélection
        if ($this->sort === 'Newest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($this->sort === 'Best Seller') {
            $query->orderBy('price', 'desc'); // Trier du plus cher au moins cher
        } elseif ($this->sort === 'Best Match') {
            $query->orderBy('price', 'asc'); // Trier du moins cher au plus cher
        }

        // Pagination des résultats, par exemple 10 par page
        $properties = $query->paginate(10);

        return view('livewire.propertys.all-properties', [
            'categories' => Category::all(),
            'properties' => $properties,
        ]);
    }

    public function updating($field)
    {
        // Réinitialiser la pagination à la première page lorsqu'un filtre est modifié
        if ($field !== 'page') {
            $this->resetPage();
        }
    }
    // Méthode pour réinitialiser les filtres
    public function resetFilters()
    {
        $this->reset(['category', 'price', 'location', 'search']);
    }
}
