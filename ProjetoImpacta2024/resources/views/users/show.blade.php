<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>
<body>
       <a href="{{ route('user.index') }}">Listar</a><br>
       <a href="{{ route('user.edit', ['user'=> $user->id]) }}">Editar</a><br><br>
       <form method="POST" action="{{route('user.destroy', [ 'user' => $user->id ]) }}">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza que deseja apagar o registro?')">Apagar</button>
       </form> 
       
       <h2>Visualizar Usuário</h2>

        @if (session('success'))
         <p style="color: #086">
            {{ session('success') }}
         </p>
        @endif

       ID: {{ $user->id }}<br>
       Nome: {{ $user->name }}<br>
       Email: {{ $user->email }}<br>
       Data do registro: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}<br>
       Editado: {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}<br>

</body>
</html>
