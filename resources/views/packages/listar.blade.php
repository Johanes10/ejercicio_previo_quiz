<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>

    <h1>Listar Paquetes</h1>

    @foreach ($packages as $package)
    <tr>
        <br>
        <td>{{$package->code}}</td>
        <td>{{$package->description}}</td>
        <td>{{$package->receiver}}</td>
        <td>{{$package->address}}</td>
        <td><a href="{{route('package.show',$package->id)}}">Mostrar</a></td>
        <td><a href="{{route('package.edit',$package->id)}}">Editar</a></td>
        <td>
            <form action="{{route('package.destroy',$package->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
@endforeach
    
</body>
</html>