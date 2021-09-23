<!-- Crear form para el calculo -->
<html>
 <head>
     <title>Calcular precio alpina</title>
</head>
<body>
    <form method="post" action="Index.php">
        <!-- Espacio para colocar el primer numero -->
        <input type="text" name="Precio de producto">
        <!-- Creacion de las opciones -->
        <select name="operacion">
            <option value="0">Sumar</option>
            <option value="1">Restar</option>
            <option value="2">Multiplicar</option>
            <option value="3">Dividir</option>
</select>
<!-- Espacio para ingresar el otro numero -->
<input type="text" name="num2"><br>
<!-- Boton de calcular -->
<input type="submit" name="calcular" value="Calcular">
</form>
</body>
</html>   
<!-- Codigo php -->
<?php
// Incluir la clase de mate para las operaciones
include("mate.php")
// Saber si se oprimio el boton
if(isset($_REQUEST['calcular'])){
    // Declarar variables
    $num1=$_REQUEST['Precio de productos'];
    $num2=$_REQUEST['num2'];
    $resul=$_REQUEST['operacion'];
    // saber valor seleccionado
    switch($resul){
        // Los numeros de los case son el valor dado en creacion de opciones
        case 0:echo "El resultado de su suma es: " Index::Sumar($num1, $num2);
        // Para finalizar la estructura
        break; 
        case 1:echo "El resultado de su resta es: "Index::Restar($num1, $num2);
        // Para finalizar la estructura
        break;
        case 2:echo "El resultado de su multiplicacion es: "Index::Multiplicar($num1, $num2);
        // Para finalizar la estructura
        break;
        case 3:echo "El resultado de su division es: "Index::Dividir($num1, $num2);
        // Para finalizar la estructura
        break;        
    }
}
?> 