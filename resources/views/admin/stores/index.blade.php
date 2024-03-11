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
                    <td>
                        <a class= "btn btn-sm btn-primary" href="{{route('admin.stores.edit', ['store' => $store->id])}}">Editar</a>
                        <a class= "btn btn-sm btn-danger" href="{{route('admin.stores.destroy', ['store' => $store->id])}}">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $stores->links() }}

@endsection
