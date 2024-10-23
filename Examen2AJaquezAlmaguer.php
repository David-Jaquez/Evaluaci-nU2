<?php
/* CBTIS 89
Programa que calcula el IVA, el subtotal con el IVA, un descuento del 10% y el tonal final de varios precios, almacenado los datos en varios arreglos
Jaquez Almaguer
3ºA Programación matutino
*/

$arrayPrecios=[500, 400, 200, 700, 100];
$Longitud =count($arrayPrecios);
      $arrayIVA = array();
      $arraySubtotal = array();
      $arrayDescuentos = array();
      $arrayTotal = array();
	echo "ARREGLO PRECIOS <br>";
 for($i=0; $i<$Longitud; $i++)
	{ 
	echo $arrayPrecios[$i];
	echo "<br>";
}
echo "<br>";
echo "ARREGLO IVA <br>";
 for($i=0; $i<$Longitud; $i++)
	{ 
    $arrayIVA[$i]=$arrayPrecios[$i]*0.16;
    echo $arrayIVA[$i];
	echo "<br>";
}
echo "<br>";
echo "ARREGLO SUBTOTAL <br>";
 for($i=0; $i<$Longitud; $i++)
	{ 	
    $arraySubtotal[$i]=$arrayPrecios[$i]+$arrayIVA[$i];
    echo $arraySubtotal[$i];
	echo "<br>";
}
echo "<br>";
echo "ARREGLO DESCUENTOS <br>";
 for($i=0; $i<$Longitud; $i++)
	{
    $arrayDescuentos[$i]=$arraySubtotal[$i]*0.10;
    echo $arrayDescuentos[$i];
	echo "<br>";}
	echo"<br>";
	echo "ARREGLO TOTAL <br>";
 for($i=0; $i<$Longitud; $i++)
	{
	    $arrayTotal[$i]=$arraySubtotal[$i]-$arrayDescuentos[$i];
	    echo $arrayTotal[$i];

	echo "<br>";}

?>