<table border="1" cellpadding="2">
  <thead style="background-color: #aaaaaa">
    <th>Lunes</th>
    <th>Martes</th>
    <th>Miercoles</th>
    <th>Jueves</th>
    <th>Viernes</th>
    <th>Sábado</th>
    <th>Domingo</th>
  </thead>
 <tbody>
<?php
$ObjetoFecha = new DateTime("2017-03-01"); 
//Ejemplo: Queremos mostrar Marzo 2017
   $numeroDias = $ObjetoFecha->format('t'); 
   $diaSemana = $ObjetoFecha->format('w');
   $diaSemana = $diaSemana == 0 ? 7 : $diaSemana;
   $semanaPrimerDia = $ObjetoFecha->format('n') == 1 ? 0 : $ObjetoFecha->format('W');
   $intervalo = $numeroDias -1;
   $ObjetoFecha->modify("+".$intervalo." days");
   $semanaUltimoDia = $ObjetoFecha->format('W');
   $numeroSemanas = $semanaUltimoDia-$semanaPrimerDia+1;
    $contenidoDias = array (
               "16" => array( 0 => 150, 1 => 110), 
               "21" => array(0 => 375, 1 => 280)
               );
 for($i=1;$i<=$numeroSemanas;$i++)
 {
    ?><tr><?php //iniciamos una fila cada semana.
    for($d=1;$d<=7;$d++)
    {
      //Si estamos en la primera semana hay que detectar el dia
      // de comienzo del mes para inicializar el contador de días
      if($i == 1)
      {
        if($d >= $diaSemana)
        {
           $dia = isset($dia) ? $dia+1 : 1;
        }
      }
      elseif(isset($dia) && $dia < $numeroDias)
      {
        $dia++; 
      }
      else
      {
        //Se acabaron los días del mes. 
       //(estas celdas pertenecen al mes siguiente)
       unset($dia);
      }
 
      if(isset($dia))
      {
        //Pintamos los días del mes.
       ?>
         <td class="dianormal" width="100" height="90" padding="0">
         <table width="100%" height="100%">
         <tbody>
          <tr>
           <td height="18px" class="diacal" align="left" style="font-size: 12px"><?php echo $dia ?></td>
          </tr>
          <tr>
           <td class="pretachcal" align="right" style="text-decoration: line-through; font-size: 12px; color: #770000">
            <?php echo $contenidoDias[$dia][0] ?>
           </td>
          </tr>
          <tr>
           <td class="precio" align="right" style="font-size: 14px; color: #007700">
            <?php echo $contenidoDias[$dia][1] ?>
           </td>
          </tr>
        </tbody>
      </table>
     </td><?php 
     }
     else
     {
       //Pintamos celdas vacias
       ?><td class="dianomes">&nbsp;</td><?php
     } 
   }
  ?></tr><?php
 }
 
 ?></tbody>
 </table>