<?php 
include('common/conexion.php');
//print_r($_SESSION['user']);
//$products = getProducts($conn);

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
   
    <form action="php/process_login.php" method="post">
        <pre><input type="text" name="username" placeholder="Usuario">
        <pre><input type="password" name="password" placeholder="Contraseña">
        <pre><button>Ingresar</button>
    </form>
    <div>
    <a href="registro.php" >Registrar</a>
    
    </div>
    
</body>
</html>