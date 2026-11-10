<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    // Toda propriedade usada no wire:model deve existir aqui como public
    public $nome;
    public $preco;
    public $quantidade;

    public function salvar()
    {
        
        $this->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        Produto::create([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );

        return redirect()->route('produto.index');
    }
}
