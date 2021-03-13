<h1 class="text-center">Reporte de Articulos</h1>
        <table border="1">
            <thead class="">
                <tr style="background-color:#b9c9fe;">
                    <th>#</th>
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
                    
        
                    <td width="23" >{{ $articulo->nombre }}</td>
                    <td width="50">{{ $articulo->descripcion }}</td>
                    <td width="20">S/ {{ $articulo->precio }}</td>
                    <td width="15">{{ $articulo->codMarca }}</td>
                    <td width="25">{{ $articulo->codCategoria }}</td>
                    <td>{{ $articulo->stock }}</td>

                </tr>
                @endforeach
        
            </tbody>
        </table>
    
</body>
</html>