<?php
if (isset($_POST["submit"]))
{
   switch ($_POST["operador"])
   {
    //    Por medio de estas lineas es posible la operacion
   	// se presentan los casos a operar por separado
      case "suma":
           $resultado = $_POST ["operando1"] + $_POST["operando2"];
           // con la función break dinalizamos al ejecución estructurada
            break;
      case "resta":
           $resultado = $_POST ["operando1"] - $_POST["operando2"];
            // con la función break dinalizamos al ejecución estructurada
           break;
        //    Las dos funciones siguientes tenian un error por una tilde algo sencillo nada porque preocuparse, ya esta solucionado
      case "multiplicacion":
           $resultado = $_POST ["operando1"] * $_POST["operando2"];
            // con la función break dinalizamos al ejecución estructurada
           break;
       case "division":
      if ($_POST ["operando2"]==0)
           {
               echo "No es posible dividir entre cero.";
           }
           else
           {
           $resultado = $_POST ["operando1"] / $_POST["operando2"];
            // con la función break dinalizamos al ejecución estructurada
           break;
           } 
   }
}
?>
<!-- Estructura de calculadora -->
<html>
<head><title>Calculadora de plastico Alpina</title></head>
<body>
<form action="index.php" method="post">
<table borde="0">
<tr><td>Cantidad de plastico</td><td></td><td>Plastico neutro</td><td></td></tr>
<tr><td><input type="text" name="operando1"/></td>
<td>
<select name="operador">
	<option value="suma">Sumar</opcion>
	<option value="resta">Restar</option>
	<option value="multiplicacion">Multiplicar</opcion>
	<option value="division">Dividir</opcion>
</select>
</td>
<td><input type="text" name="operando2"/></td>
<td><input type="submit" name="submit" value="Calcular cantidad de plastico" /></td>
<!-- hago cambio de nombre del boton -->
</tr>
</table>
</form>
<?php
// Se crea el if para ver si la variable resultado existe, si existe puede imprimir el mensaje. En caso contrario no se realiza acción
if (isset($resultado)) 
{ 
echo "La cantidad de plastico es: {$resultado}";
// Hago cambio de el texto que sale al pedir el resultado
}
?>
</body>
</html>