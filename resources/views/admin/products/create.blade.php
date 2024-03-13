@extends('layouts.app')

@section('content')

    <h1>Criar Loja</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome Do Produto</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label>Conteúdo</label>
           <textarea name="body" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" class="form-control">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>

        <div class="form-group">
            <label>Lojas</label>
            <select name="user" id="" class="form-control">
                @foreach($stores as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button class="btn btn-lg btn-success mt-3" type="submit">Criar Produto</button>
        </div>
    </form>

@endsection

