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
    <h1 class="text-center">Reporte de Proveedor</h1>
        <table class="table table-striped">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Empresa</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>RUC</th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedors as $proveedor)
            <tr>
                <td>{{ $proveedor -> id }}</td>
                <td>{{ $proveedor -> empresa }}</td>
                <td>{{ $proveedor -> direccion }}</td>
                <td>{{ $proveedor -> email }}</td>
                <td>{{ $proveedor -> telefono }}</td>
                <td>{{ $proveedor -> ruc }}</td>
                <td>
                </tr>
                @endforeach
        
            </tbody>
        </table>
    
</body>
</html>