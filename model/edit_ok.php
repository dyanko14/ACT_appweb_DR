<?php	
    require_once('db.php');
    //--Data From User
    $id        = $_POST['id_paciente'];
	$nombre    = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$edad      = $_POST['edad'];
	$genero    = $_POST['genero'];
	$email     = $_POST['correo'];
    //--DataBase Query
    $sql = "UPDATE pacientes SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', edad='$edad', genero='$genero', correo='$email' WHERE id_paciente = '$id' ";
	if ($conn->query($sql) === TRUE) {
	 	header('Location: /records.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
$conn->close();
?>