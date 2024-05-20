<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>

    <h1>Listar Camiones</h1>

    @foreach ($trucks as $truck)
    <tr>
        <br>
        <td>{{$truck->power}}</td>
        <td>{{$truck->plate}}</td>
        <td>{{$truck->model}}</td>
        <td>{{$truck->type}}</td>
        <td><a href="{{route('truck.show',$truck->id)}}">Mostrar</a></td>
        <td><a href="{{route('truck.edit',$truck->id)}}">Editar</a></td>
        <td>
            <form action="{{route('truck.destroy',$truck->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
@endforeach
    
</body>
</html>