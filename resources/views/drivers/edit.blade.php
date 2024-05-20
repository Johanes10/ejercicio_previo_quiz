<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('driver.update', $driver)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Dni:
        <br>
        <input name="dni" type="text" value="{{old('Name',$driver->dni) }}">
        <br>
        </label>
        <br>
        <label>
        Población:
        <br>
        <input name="poblation" type="text" value="{{old('description',$driver->poblation)}}">
        <br>
        </label>
        <br>
        Nombre:
        <br>
        <input name="name" type="text" value="{{old('name',$driver->name)}}">
        <br>
        </label>
        <br>
        Telefono:
        <br>
        <input name="telephone" type="text" value="{{old('telephone',$driver->telephone)}}">
        <br>
        </label>
        <br>
        Dirección:
        <br>
        <input name="address" type="text" value="{{old('address',$driver->address)}}">
        <br>
        </label>
        <br>
        Salario:
        <br>
        <input name="salary" type="text" value="{{old('salary',$driver->salary)}}">
        <br>
        </label>
        <br>
        
        <button  type="submit">Actualizar Conductor</button>
        
    </form>
    
</body>
</html>