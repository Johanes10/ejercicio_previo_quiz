<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('truck.update', $truck)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Potencia:
        <br>
        <input name="power" type="text" value="{{old('power',$truck->power) }}">
        <br>
        </label>
        <br>
        <label>
        Matricula:
        <br>
        <input name="plate" type="text" value="{{old('plate',$truck->plate)}}">
        <br>
        </label>
        <br>
        Modelo:
        <br>
        <input name="model" type="text" value="{{old('model',$truck->model)}}">
        <br>
        </label>
        <br>
        Tipo:
        <br>
        <input name="type" type="text" value="{{old('type',$truck->type)}}">
        <br>
        </label>
        <br>
        <br>
        
        <button  type="submit">Actualizar Conductor</button>
        
    </form>
    
</body>
</html>