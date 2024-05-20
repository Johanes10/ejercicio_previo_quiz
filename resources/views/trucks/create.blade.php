<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container text-center">
    
<div class="card col-10">
    <div class="card-header">Registrar</div>
    <div class="card-body">
        <h4 class="card-title">Crear Camion</h4>
        <p class="card-text">
            <form action="{{route('trucks.store')}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            
            <label>
                Potencia:
                <br>
                <input type="text" name="power">
            </label>
            <br>
            <label>
                Matricula:
                <br>
                <input type="text" name="plate">
            </label>
            <br>
            <label>
                Modelo:
                <br>
                <input type="text" name="model">
            </label>
            <br>
            <label>
                Tipo:
                <br>
                <input type="text" name="type">
            </label>
            <br>
            <br>
            <button class="btn btn-success" type="submit">Registrar</button>
            </form>
            
            
            
            
            </body>
            </html></p>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>