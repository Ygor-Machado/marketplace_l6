<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar Loja</h1>
    <form action="/admin/stores/store" method="POST">
        @csrf
        <div>
            <label>Nome Da Loja</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Descrição</label>
            <input type="text" name="description">
        </div>

        <div>
            <label>Telefone</label>
            <input type="text" name="phone">
        </div>

        <div>
            <label>Celular</label>
            <input type="text" name="mobile_phone">
        </div>

        <div>
            <label>Slug</label>
            <input type="text" name="slug">
        </div>

        <div>
            <label>Usuario</label>
            <select name="user" id="">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">Criar Loja</button>
        </div>
    </form>

</body>
</html>
