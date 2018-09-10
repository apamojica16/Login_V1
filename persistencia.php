<Center><h2>PHP Test conexion base de datos (ESTAMOS EN MANTENIMIENTO)</h2></center>
<?php
// display form if user has not clicked submit
if (isset($_POST["nombre_registro"])) {
/*include 'conexionsqlserver.php';*/

$name=$_POST['nombre_registro'];
$cedula=$_POST['cedula'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$constraseñaconfirm=$_POST['pass'];
/*$serverName='DESKTOP-78R5FNV\SQLEXPRESS';
$connectionInfo=array("Database"=>"Payprueba", "UID"=>"prueba", "PWD"=>"prueba16",);
$connectionInfo=array("Database"=>"Payprueba");
$conn_sis=sqlsrv_connect($serverName,$connectionInfo);*/

//http://127.0.0.1:50958
$host='localhost';
$port=5432;
$user='postgres';
$pass='D1sart3cth';
$dbname='DemoCM';



$connect = pg_connect("host='$host' port='$port' user='$user' password='$pass' dbname='$dbname'");
if( $connect ) {
    echo "Conexión establecida.<br />";
    
}else{
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}
/*$sentencia="Select * From Pay where NIT=6000";
$query = sqlsrv_query($conn_sis,$sentencia);*/
$query ="INSERT INTO login_users (nombres, cedula,email, contraseña) VALUES ('$name', '$cedula','$email', '$contraseña')"; 

$result=pg_query($connect, $query);

if($result){
    header('Location: login.html');
}else{}
echo "nombre= ".$name." cedula= ".$cedula." Correo= ".$email." contraseña= ".$contraseña." confirmacion contraseña= ".$constraseñaconfirm;

} else  if (isset($_POST["email_login"])) {
    /*include 'conexionsqlserver.php';*/
    
    $email=$_POST['email_login'];
   // $cedula=$_POST['cedula'];
    //$email=$_POST['email'];
    //$contraseña=$_POST['contraseña'];
    //$constraseñaconfirm=$_POST['pass'];
    /*$serverName='DESKTOP-78R5FNV\SQLEXPRESS';
    $connectionInfo=array("Database"=>"Payprueba", "UID"=>"prueba", "PWD"=>"prueba16",);
    $connectionInfo=array("Database"=>"Payprueba");
    $conn_sis=sqlsrv_connect($serverName,$connectionInfo);*/
    
 //   http://127.0.0.1:50958
    $host='localhost';
    $port=5432;
    $user='postgres';
    $pass='D1sart3cth';
    $dbname='DemoCM';
    
    echo "kjsdckjsdhckjsdc  ".$email;
    
    $connect = pg_connect("host='$host' port='$port' user='$user' password='$pass' dbname='$dbname'");
    if( $connect ) {
        echo "Conexión establecida.<br />";
        $query = 'SELECT contraseña FROM login_users where email='$email'';
        $result = pg_query($query) or die('Query failed: ' . pg_last_error());
     echo "El usuario con el email: ".$email."tiene la contraseña".$result;
    }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r( sqlsrv_errors(), true));
    }
    /*$sentencia="Select * From Pay where NIT=6000";
    $query = sqlsrv_query($conn_sis,$sentencia);*/
   /* $query ="INSERT INTO login_users (nombres, cedula,email, contraseña) VALUES ('$name', '$cedula','$email', '$contraseña')"; 
    
    $result=pg_query($connect, $query);
    
    if($result){
        header('Location: login.html');
    }else{}
    echo "nombre= ".$name." cedula= ".$cedula." Correo= ".$email." contraseña= ".$contraseña." confirmacion contraseña= ".$constraseñaconfirm;
    */
    }
    

    





?>