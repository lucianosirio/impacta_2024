<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    
    <a href="{{ route('user.create')}}">Cadatrar</a><br>
    
    <h2>Listar Usuários</h2>

    @if (session('success'))
        <p style="color: #086">
            {{ session('success') }}
        </p>
    @endif

    @forelse ($users as $user)
        ID: {{ $user->id }} <br>
        Nome: {{ $user->name }}<br>
        E-mail: {{ $user->email}}<br>
        <a href="{{ route('user.show', ['user' => $user]) }}">Visualizar</a><br>
       
        <hr>
    @empty
    @endforelse

</body>
</html>
