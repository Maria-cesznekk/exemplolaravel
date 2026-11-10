<div>

    <table class="table table-striped">
        <thead>
            <tr>
                <form wire:submit="salvar">

                    <th>Nome</th>
                   
                    <th>Preço</th>
                 
                    <th>quantidade</th>
                    
                    <input type="text" wire:model="nome">
                      <input type="number" wire:model="preco">
                       <input type="number" wire:model="quantidade">
                      <button type="submit">Salvar Produto</button>
            </tr>
            <span wire:loading wire:target="salvar">
                Salvando...
            </span>
        </thead>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif



        </form>

</div>