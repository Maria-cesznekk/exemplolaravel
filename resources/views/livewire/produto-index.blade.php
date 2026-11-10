<div>
    <p>
        @if(session()->has('success'))

    <div>{{ session('success') }} </div>
    </p>

    @endif
    <input type="text" class="form-control" placeholder="Pesquisar produto..." wire:model.live="busca">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>

                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade }}</td>
            </tr>
            @endforeach

        </tbody>

    </table>

</div>