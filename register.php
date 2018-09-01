<Center><h2>PHP Test conexion base de datos (ESTAMOS EN MANTENIMIENTO)</h2></center>
<?php
// display form if user has not clicked submit
if (isset($_POST["nombre"])) {
/*include 'conexionsqlserver.php';

$name=$_POST['nombre'];
$cedula=$_POST['cedula'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$constraseñaconfirm=$_POST['pass'];
$serverName='DESKTOP-78R5FNV\SQLEXPRESS';
$connectionInfo=array("Database"=>"Payprueba", "UID"=>"prueba", "PWD"=>"prueba16",);
$connectionInfo=array("Database"=>"Payprueba");
$conn_sis=sqlsrv_connect($serverName,$connectionInfo);*/

http://127.0.0.1:50958
$host="127.0.0.1";
$port="5432";
$user="postgres";
$pass="D1sart3cth";
$dbname="DemoCM";



$connect = pg_connect("host=$host, port=$port, user=$user, 
password=$pass, dbname=$dbname");
if( $connect ) {
    echo "Conexión establecida.<br />";
}else{
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}
/*$sentencia="Select * From Pay where NIT=6000";
$query = sqlsrv_query($conn_sis,$sentencia);*/
}

echo "nombre= ".$name." cedula= ".$cedula." Correo= ".$email." contraseña= ".$contraseña." confirmacion contraseña= ".$constraseñaconfirm





?>