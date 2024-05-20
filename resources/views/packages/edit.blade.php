<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('package.update', $package)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Codigo:
        <br>
        <input name="name" type="text" value="{{old('Name',$package->code) }}">
        <br>
        </label>
        <br>
        <label>
        Descripcion:
        <br>
        <input name="description" type="text" value="{{old('description',$package->description)}}">
        <br>
        </label>
        <br>
        Destinatario:
        <br>
        <input name="receiver" type="text" value="{{old('receiver',$package->receiver)}}">
        <br>
        </label>
        <br>
        Direccion:
        <br>
        <input name="address" type="text" value="{{old('address',$package->address)}}">
        <br>
        </label>
        <br>
        
        <button  type="submit">Actualizar Paquete</button>
        
    </form>
    
</body>
</html>