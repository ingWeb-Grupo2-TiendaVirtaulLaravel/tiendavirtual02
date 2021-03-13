<?php

  function getPlantilla($informacion){

$plantilla = '
<body>
    <header>
      <div style="text-align:center;">
      <img src="img/negolatina.png" width="70" heigth="70">
      </div>
      <div style="text-align:center;  font-family:courier; font-size:20px;"> REPORTE DE PEDIDOS </div>
      
    </header>
    <main>
      <table>
        <thead>
          <tr style="background-color: #b9c9fe; color:blue; text-align:center; font-family:courier; font-size:13px;">
            <th>Codigo</th>
            <th>Fecha de Pedido</th>
           
          </tr>
        </thead>
        <tbody>';
        
        foreach ($informacion as $categorias) {
          
        $plantilla .= '<tr style="text-align:center; font-family:courier; background-color: #e8edff; ">
            <td>'. $categorias["nombre"].'</td>
            <td>'. $categorias["descripcion"].'</td>
           
          </tr>';

      }
      $plantilla .= '</tbody>
      </table>
    </main>
  </body>';

  return  $plantilla;
}

?>