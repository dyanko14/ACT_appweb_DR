<?php
    class Destroy
    {
    	public function __construct($paciente, $usuario, $mensaje, $login)
    	{
    		$this->paciente = $paciente;
    		$this->usuario  = $usuario;
    		$this->mensaje  = $mensaje;
    		$this->login    = $login;
    	}
    	public function logout()
    	{
    		session_unset($this->paciente);
    		session_unset($this->usuario);
    		session_unset($this->mensaje);
    		session_unset($this->login);
    		session_destroy();
    		header('Location: http://localhost/');
    	}
    }
    session_name('GrupoACT');
    session_start();
    //--
	$paciente = $_SESSION["paciente"];
	$usuario  = $_SESSION["usuario"];
	$mensaje  = $_SESSION["mensaje"];
	$login    = $_SESSION["login"];
	//--
    $session = new Destroy($paciente, $usuario, $mensaje, $login);
    $session->logout();
?>