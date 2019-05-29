<?php 
include('../common/conexion.php');

if($_POST) {
	if (isset($_POST['username']) && isset($_POST['pass']) && !empty($_POST['username']) && !empty($_POST['pass'])) {
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$sql = "SELECT * FROM user	WHERE
        username='$username'
		AND pass=MD5('$password')";
		$res = $conn->query($sql);
		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}
		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['user'] = [
                        'id' => $row['store'],
                        'nombre' => $row['nombre'],
                        'rol' => $row['rol'],
                        'username' => $row['username'],
                        'pass' => $row['password']
				];
                 
                if ($_SESSION['user'] [rol] == 'administrador') {
                        echo "lista";
                        redirect('admin.php');
                    } elseif($_SESSION['user'] [rol] == 'cliente')  {
                        redirect('admin.php');
                    }
                    
					redirect('../home.php');
				}
		} else {
			redirect('../index.php?error_message=Usuario o clave incorrectos!');
		}
	} 
} else {
	redirect('../index.php');
}