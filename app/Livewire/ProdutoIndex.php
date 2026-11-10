<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public $busca = '';

    public function render()
    {
        $produtos = Produto::where(
            'nome',
            'like',
            '%' . $this->busca . '%'
        )->get();

        return view(
            'livewire.produto-index',
            compact('produtos')
        );

        
       
    }
}