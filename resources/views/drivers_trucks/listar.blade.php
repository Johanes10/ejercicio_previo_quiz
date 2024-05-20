<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>

    <h1>Listar Conductor Camion</h1>

    @foreach ($drivers_trucks as $driver_truck)
    <tr>
        <br>
        <b>ID:</b> <td>{{$driver_truck->id}}</td>
        <b>Conductor:</b><td>{{$driver_truck->driver_id}}</td>
        <b>Camion:</b><td>{{$driver_truck->truck_id}}</td>
        <td><a href="{{route('driver.show',$driver_truck->id)}}">Mostrar</a></td>
        <td><a href="{{route('driver.edit',$driver_truck->id)}}">Editar</a></td>
        <td>
            <form action="{{route('driver.destroy',$driver_truck->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
@endforeach
    
</body>
</html>