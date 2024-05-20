<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>

    <h1>Listar Paquetes</h1>

    @foreach ($drivers as $driver)
    <tr>
        <br>
        <td>{{$driver->dni}}</td>
        <td>{{$driver->poblation}}</td>
        <td>{{$driver->name}}</td>
        <td>{{$driver->telephone}}</td>
        <td>{{$driver->address}}</td>
        <td>{{$driver->salary}}</td>
        <td><a href="{{route('driver.show',$driver->id)}}">Mostrar</a></td>
        <td><a href="{{route('driver.edit',$driver->id)}}">Editar</a></td>
        <td>
            <form action="{{route('driver.destroy',$driver->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
@endforeach
    
</body>
</html>