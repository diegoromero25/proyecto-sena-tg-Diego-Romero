<!-- Codigo php -->
<?php
// Variable de obtencion de datos de calculadora 
$operacion = $_POST['operaciones'];
// Mensaje de resultado
echo "El resultado del producto es:";
// Condicionales
switch($operacion)
{
    // Suma
    case 'sumar': 
    echo $_POST['n1'] + $_POST['n2'];
    break;
    // Resta
    case 'restar': 
    echo $_POST['n1'] - $_POST['n2'];
    break;
    // Multiplicar
    case 'multiplicar': 
    echo $_POST['n1'] * $_POST['n2'];
    break;
    // Dividir
    case 'dividir': 
    echo $_POST['n1'] / $_POST['n2'];
    break;
}
?>