<?php
    class Home
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
                require_once("views/header_records.php");
                require_once("views/records.php");
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
    $home = new Home($_SESSION["login"]);
    $home->start();
?>