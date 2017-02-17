<?php
    class deletePersona
    {
        public function eliminate()
        {
            require("db.php");
            $id  = $_SESSION["paciente"];
            $sql = "DELETE FROM pacientes WHERE id_paciente = '$id' ";
            if ($conn->query($sql) === TRUE)
            {
                header('Location: /records.php');
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    }
    session_name('GrupoACT');
    session_start();
    //--
    $delete = new deletePersona();
    $delete->eliminate();
?>