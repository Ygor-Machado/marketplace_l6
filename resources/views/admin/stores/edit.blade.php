@extends('layouts.app')

@section('content')

    <h1>Editar Loja</h1>
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Nome Da Loja</label>
            <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" value="{{$store->name}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description')is-invalid @enderror" value="{{$store->description}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control @error('phone')is-invalid @enderror" value="{{$store->phone}}">

            @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Celular</label>
            <input type="text" name="mobile_phone" class="form-control @error('mobile_phone')is-invalid @enderror" value="{{$store->mobile_phone}}">

            @error('mobile_phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group mt-3">
            <p><img src="{{asset('storage/' . $store->logo)}}" alt=""></p>
            <label>Logo da loja</label>
            <input type="file" name="logo" class="form-control @error('logo')is-invalid @enderror">

            @error('logo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <button class="btn btn-lg btn-success mt-3" type="submit">Atualizar Loja</button>
        </div>
    </form>

@endsection

