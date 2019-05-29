<?php 

include('../common/conexion.php');


if($_POST) {
	if (isset($_POST['name']) && isset($_POST['rol']) && isset($_POST['username'])  && isset($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['rol']) && !empty($_POST['username']) && !empty($_POST['pass'])) {
        $store = $_POST['name'];
        $type = $_POST['rol'];
        $username = $_POST['username'];
		$password = $_POST['pass'];
		$sql_insert = "INSERT INTO user
		(nombre, rol,username, password)
		VALUES ('$store','$type','$username', MD5('$password'))";
		echo $sql_insert;
		$conn->query($sql_insert);
		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		redirect('../registro.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../registro.php');
}
?>