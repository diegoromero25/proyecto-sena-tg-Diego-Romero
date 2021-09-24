<!-- Estructura de calculadora -->
<hmtl>
    <head>
        <title>Alpina productos</title>
</head>
<!-- calculadora  -->
<body>
<form action="mate.php" method="post" name="calculadora">
    <!-- Campos de calculadora-->
    <label>Ingrese el precio:</label>
    <input type="text" name="n1"></input><br/><br/>
    <label>Ingrese la cantidad:</label>
    <input type="text" name="n2"></input><br/><br/>
    <!-- Lista de operaciones que deseamos hacer -->
    <label>Seleccione la operacion:<select name="operaciones">
        <!-- Seleccion de operacion -->
        <option value="sumar">Sumar</opcion>
        <option value="restar">Restar</opcion>
        <option value="multiplicar">Multiplicar</opcion>
        <option value="dividir">Dividir</opcion>
</select>
</label><br/>
<!-- Boton de calcular -->
<input type="submit" value="Calcular" name="Calcular"><br/>
</form>
</body>
</html>