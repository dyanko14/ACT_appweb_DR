<?php
    if(isset($_POST['submit']))
    {
        class Login
        {
            //Atributos-------------------------------------------------------------------------------------------
            public  $user;
            private $pass;
            //Métodos---------------------------------------------------------------------------------------------
            public function __construct($user, $pass)
            {
                $this->user = $user;
                $this->pass = $pass;
            }
            private function userNull()
            {
                if (empty($this->user))
                {
                    echo "<div class='red white-text center-align'>Usuario vacío</div>"."<br>";
                }
            }
            private function passNull()
            {
                if (empty($this->pass) or $this->pass == "d41d8cd98f00b204e9800998ecf8427e")
                {
                    echo "<div class='red white-text center-align'>Password vacío</div>"."<br>";
                }
            }
            private function cleanData()
            {
                $this->user = trim($this->user);
                $this->user = stripslashes($this->user);
                $this->user = htmlspecialchars($this->user);                
                //--
                $this->pass = $this->pass;
                $this->pass = trim($this->pass);
                $this->pass = stripslashes($this->pass);
                $this->pass = htmlspecialchars($this->pass);
                $this->pass = md5($this->pass);
            }       
            public function validateLogin()
            {
                //--Access to Private Methods
                self::userNull();
                self::passNull();
                self::cleanData();
                //--Login Validate
                if ($this->user != NULL and $this->pass != NULL)
                {
                    //--DataBase Validate
                    require_once('/config/db.php');
                    $sql    = "SELECT * FROM login WHERE usuario='$this->user' AND password='$this->pass' LIMIT 1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $_SESSION["usuario"]    = $row['usuario'];
                            $_SESSION["mensaje"]    = "Bienvenido Dr.";
                            $_SESSION["login"]      = TRUE;
                            $_SESSION["paciente"]   = "";
                            $_SESSION["enfermedad"] = "";
                            header('Location: /home.php');
                        }
                    }
                    else
                    {                    
                        echo "<div class='red white-text center-align'>Datos de sesión inválidos</div>"."<br>";
                    }                    
                    $conn->close();
                }
            }
        }
        //------------------------------------------------------
        $login = new Login($_POST['user'], $_POST['pass']);
        $login -> validateLogin();
    }
?>