<?php
    class Delete
    {    
        public function __construct($sessionLogin)
        {
            $this->sessionLogin = $sessionLogin;
        }
        public function start()
        {
            if ($this->sessionLogin == TRUE)
            {
                require_once("views/header.php");
                require_once("views/header_delete.php");
                require_once("views/delete.php");
                require_once("views/footer.php");
            }
            else
            {
                header('Location: /forbidden.php');
            }
        }
    }
    session_name('GrupoACT');
    session_start();
    //--
    $home = new Delete($_SESSION["login"]);
    $home->start();
?>