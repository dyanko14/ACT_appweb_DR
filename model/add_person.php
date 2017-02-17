<?php
//--Variables to store the data null status
$nameErr = $apellido1Err = $apellido2Err = $edadErr = $emailErr = "";
$name    = $apellido1    = $apellido2    = $edad    = $email    = "";
//---------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["name"]))
	{
		$nameErr = "Nombre vacío";
	}
	else
	{
    	$name = test_input($_POST["name"]);
    	//-Check if name only contains letters and whitespace
    	if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/",$name))
    	{
      		$nameErr = "Solo se permiten letras, acentos y espacios";
    	}
  	}
  //------------------------------------------------------------------
	if (empty($_POST["apellido1"]))
	{
		$apellido1Err = "Apellido Paterno vacío";
	}
	else
	{
    	$apellido1 = test_input($_POST["apellido1"]);
    	//-Check if name only contains letters and whitespace
    	if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/",$apellido1))
    	{
      		$apellido1Err = "Solo se permiten letras, acentos y espacios";
    	}
  	}
  //------------------------------------------------------------------
	if (empty($_POST["apellido2"]))
	{
		$apellido2Err = "Apellido Materno vacío";
	}
	else
	{
    	$apellido2 = test_input($_POST["apellido2"]);
    	//-Check if name only contains letters and whitespace
    	if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/",$apellido2))
    	{
      		$apellido2Err = "Solo se permiten letras, acentos y espacios";
    	}
  	}
  //------------------------------------------------------------------
	if (empty($_POST["edad"]))
	{
		$edadErr = "Edad vacia";
	}
	else
	{
    	$edad = test_input($_POST["edad"]);
    	//-Check if name only contains letters and whitespace
    	if (!preg_match("/^[0-9]*$/",$edad))
    	{
      		$edadErr = "Solo se permiten números";
    	}
    	if (strlen($edad) > 2)
    	{
			$edadErr = "Rango no permitido";
    	}
    	if ($edad < 0 or $edad > 100)
    	{
    		$edadErr = "Rango no permitido";
    	}
  	}
  //------------------------------------------------------------------
  	if (empty($_POST["email"])) {
    	$email = test_input($_POST["email"]);
  	}
  	else
  	{
    	$email = test_input($_POST["email"]);
    	// check if e-mail address is well-formed
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    	{
    		$emailErr = "Invalid email format";
    	}
    }
//------------------------------------------------------------------
if (empty($nameErr) and empty($apellido1Err) and empty($apellido2Err) and empty($edadErr) and empty($emailErr))
{
	$genero = $_POST['genero'];
	require_once('config/db.php');
	$sql = "INSERT INTO pacientes (nombre, apellido1, apellido2, edad, genero, correo) VALUES ('$name','$apellido1','$apellido2','$edad','$genero','$email') ";
	if ($conn->query($sql) === TRUE)
	{
		//--Clean the data from Formulary
		$nameErr = $apellido1Err = $apellido2Err = $edadErr = $emailErr = "";
		$name    = $apellido1    = $apellido2    = $edad    = $email    = "";
		echo "<a href='records.php'><div class='green white-text center-align'>Registro exitoso</div></a>"."<br>";
		//--Redirect Page
		header("location: records.php");
	} 
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
//------------------------------------------------------------------
}
//--Cleaning the data from user
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
//------------------------------------------------------------------ 
}
?>
