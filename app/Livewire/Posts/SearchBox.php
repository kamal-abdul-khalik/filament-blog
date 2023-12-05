<?php

namespace App\Livewire\Posts;

use Livewire\Component;

use function Laravel\Prompts\search;

class SearchBox extends Component
{
    public $search = '';

    public function updatedSearch()
    {
        $this->dispatch('search', search: $this->search);
    }

    public function render()
    {
        return view('livewire.posts.search-box');
    }
}
