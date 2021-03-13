<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">  -->
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Reporte de Articulos</h1>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio Unitario</th>
                    <th>Codigo Marca</th>
                    <th>Codigo Categoria</th>
                    <th>Stock</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>
                    <img class="" src="{{ asset('storage').'/'.$articulo->foto }}" width="50" alt="">
                    
                    </td>
        
                    <td>{{ $articulo->nombre }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>S/ {{ $articulo->precio }}</td>
                    <td>{{ $articulo->codMarca }}</td>
                    <td>{{ $articulo->codCategoria }}</td>
                    <td>{{ $articulo->stock }}</td>
                    
                </tr>
                @endforeach
        
            </tbody>
        </table>
    
</body>
</html>