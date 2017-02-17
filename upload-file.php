<?php
	class fileUpload
	{		
		public function __construct()
		{

		}
		public function start()
		{
			$uploaddir = "uploads/paciente".$_SESSION["paciente"]."/";
			$file      = $uploaddir . basename($_FILES['uploadfile']['name']);
			if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file))
			{
				echo "success";
			}
			else
			{
				echo "error";
			}
		}
	}
	
	session_name("GrupoACT");
	session_start();
    //--
    $home = new fileUpload();
    $home->start();
?>