@extends('layouts.app')

@section('content')

    <a href="{{ route('admin.products.create') }}" class="btn btn-lg btn-success mt-3 mb-3">Criar Produto</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price, 2, ',', '.')}}</td>
                    <td>{{$product->store->name}}</td>
                    <td><a style="display:inline;" class="btn btn-primary" href="{{ route('admin.products.edit', ['product' => $product->id]) }}">Editar</a>
                        <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button style="display:inline;" class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

@endsection
