@extends('layouts.app')

@section('content')

    <a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success mt-3 mb-3">Criar Loja</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
                <tr>
                    <td>{{ $store->id }}</td>
                    <td>{{$store->name}}</td>
                    <td><a style="display:inline;" class="btn btn-primary" href="{{ route('admin.stores.edit', ['store' => $store->id]) }}">Editar</a>
                        <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button style="display:inline;" class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $stores->links() }}

@endsection
