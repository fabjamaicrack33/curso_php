<?php

/**
 Realice un programa que imprima cual es tu color favorito.
 mostrar un ejemplo con if-else y con switch 
 */

$color_favorito = 'rojo';

/*
if($color_favorito == 'azul'){
    echo '<h1> tu color favorito es: </h1>' . $color_favorito ;
}elseif($color_favorito == 'amarillo'){
    echo 'tu color favorito es: ' . $color_favorito;
}elseif($color_favorito == 'rojo'){
    echo 'tu color favorito es: ' . $color_favorito;
}elseif($color_favorito == 'cafe'){
    echo 'tu color favorito es: ' . $color_favorito;
}elseif($color_favorito == 'negro'){
     echo 'tu color favorito es: ' . $color_favorito;
 }else{
     echo 'no se encuentra este color';
 }
*/

switch($color_favorito){
 case'rojo';
      echo 'tu color favorito es rojo';
      break;
  case'verde';
      echo 'tu color favorito es verde';
      break;
  case'azul';
      echo '<h1>tu color favorito es azul<h1>';
      break;
   default:
       echo 'tu color favorito no es rojo,ni verde,ni azul';
}

            
  echo "<h1>Desarrollo Web Con PHP</h1>";
  echo "<p>Edutin Academy y Sena.</p>"
?>
