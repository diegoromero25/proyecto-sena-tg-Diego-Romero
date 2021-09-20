// primer modulo
<html>
    <body>
<?php
echo "<h1>¡Alpina por un mundo delicioso!</h1>";
echo "<h2> Alpina por la mejor alimentacion<h2>";
?>
</body>
</html>
//segundo modulo 
<?php
$y = 'Yogurt';
$Yogurt = "de fresa";
echo $$y;
// outputs 'de fresa'
?>
//tercer modulo 
<?php
$num1 = 4;
$num2 = 3;
//Addition
echo $num1 + $num2; //7
// Subtraction
echo $num1 - $num2; //1
//Multiplication
echo $num1 * $num2; //12
//Division
echo $num1 / $num2; //1.3333333333
?>
// cuarto modulo
<?php
$people = array(
    'online'=>('Jefe Alpina','operativo Alpina')
    'offline'=>('Tecnico Alpina')
)
echo $people['online'][0]; //outputs "Jefe Alpina"
echo $people['offline'][1]; //outputs "Tecnico Alpina"
?>
//Quinto modulo 
<html>
    <body>
        <?php include 'header.php'; ?>
</body>
</html>
//Sexto modulo
<?php
function mult ($num1, $num2) {
    $res = $num1 * $num2;
    return $res
}
echo mult(4, 3);
//outputs 12
?>
//Septimo modulo
<form action= "curso.php" method="post">
    <p> name: <input type="text" name="name" /></p>
    <p> codigo: <input type="text" codigo="codigo" /></p>
    <p> <input type="submit" name="submit" value="Submit"
    /></p>
</form>

<?php
session_start();
$_SESSION['yogurt'] = "de fresa";
$_SESSION['name'] = "Jefe Alpina";
?>
// octavo modulo
<?php
$read = file('codigo.txt');
foreach($read as $line) {
    echo $line ."123, 456";
}

$myfile = fopen ("codigo.txt", "w");
$txt = "codigo\n";
fwrite($myfile, $txt);
fclose($myfile, $txt);
?>
// noveno modulo
<?php
class myClass {
    static $myStaticProperty = 12;
}
echo myClass::$myStaticProperty;
?>
<?php
class myClass {
    static $myProperty = 12;
    static function $myMethod(){
        echo self::$myProperty;
    }
}
myClass::$myMethod();
?>
<?php
class Yogurt {
public $Yogurt;
public $name;
public function __construct($Yogurt, $name){
    $this->yogurt = $Yogurt;
    $this->name = $name;
}
}
$p = new Yogurt("de mango", 12);
?>
