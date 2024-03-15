@extends('layouts.app')

@section('content')

    <h1>Criar Produto</h1>
    <form action="{{route('admin.products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome Do Produto</label>
            <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" value="{{old('name')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description')is-invalid @enderror" value="{{old('description')}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Conteúdo</label>
           <textarea name="body" cols="30" rows="10" class="form-control @error('name')is-invalid @enderror">{{old('body')}}</textarea>

            @error('body')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" class="form-control @error('name')is-invalid @enderror" value="{{old('price')}}">

            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control @error('slug')is-invalid @enderror" value="{{old('slug')}}">

            @error('slug')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Lojas</label>
            <select name="store" id="" class="form-control">
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

