<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $preco;

    public function salvar()
    {
        Produto::create([
            'nome' => $this->nome,
            'preco' => $this->preco,
        ]);
    }
}
