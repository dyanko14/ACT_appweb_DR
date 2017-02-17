
    </blockquote>
    <blockquote class="center-align">   
    <!--Form-->
    <div class="row">
    <div class="col l4 m2 s12">
    </div>
    <!--SQL-->
      <?php
        $id = $_GET['id'];
        require_once ("config/db.php");
        $sql    = "SELECT * FROM pacientes WHERE id_paciente = '$id' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
          //--Output data of each row
          while($row = $result->fetch_assoc())
          {
          ?>
          <div class="col l4 m8 s12">
            <form action="model/edit_ok.php" method="post">        
                <input id="icon_prefix" type="hidden" class="validate" autofocus name='id_paciente' value=<?= $row["id_paciente"]?>>
            <div class="row">
              <div class="input-field col s12">
              <form action="add_person.php" method="post">
                <i class="material-icons prefix">person_pin</i>
                <input id="icon_prefix" type="text" class="validate green-text" autofocus name='nombre' value=<?= $row["nombre"]?>>
                <label for="icon_prefix">Nombre</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
              <form action="add_person.php" method="post">
                <i class="material-icons prefix">person_pin</i>
                <input id="icon_prefix" type="text" class="validate green-text" name='apellido1' value=<?= $row["apellido1"]?>>
                <label for="icon_prefix">Apellido Paterno</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
              <form action="add_person.php" method="post">
                <i class="material-icons prefix">person_pin</i>
                <input id="icon_prefix" type="text" class="validate green-text" name='apellido2' value=<?= $row["apellido2"]?>>
                <label for="icon_prefix">Apellido Materno</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
              <form action="add_person.php" method="post">
                <i class="material-icons prefix">info_outline</i>
                <input id="icon_prefix" type="text" class="validate green-text" name='edad' value=<?= $row["edad"]?>>
                <label for="icon_prefix">Edad</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
              <form action="add_person.php" method="post">
                <i class="material-icons prefix">mail_outline</i>
                <input id="icon_prefix" type="text" class="validate green-text" name='correo' value=<?= $row["correo"]?>>
                <label for="icon_prefix">Correo</label>
              </div>
            </div>
            <div class="row">
            <div class="col l6">
              <?php
              if ($row['genero'] == "M")
              {?>
                <input name="genero" type="radio" id="test1" value="M" checked="" />
              <?php
              }
              else
              {?>
                <input name="genero" type="radio" id="test1" value="M" />
              <?php
              }
              ?>              
              <label for="test1">Masculino</label>
            </div>
            <div class="col l6">
              <?php
              if ($row['genero'] == "F")
              {?>
                <input name="genero" type="radio" id="test2" value="F" checked="" />
              <?php
              }
              else
              {?>
                <input name="genero" type="radio" id="test2" value="F"/>
              <?php
              }
              ?>
              <label for="test2">Femenino</label>
            </div>
            </div>
            <button type="submit" class="waves-effect waves-light green btn"><i class="material-icons left">done</i>Editar</button>
            </form>
         </div>
          <?php
          }
        }
        else
        {
          echo "<div class='center-align'>Paciente no existente</div>";
        }
        $conn->close();
      ?> 
    <div class="col l4 m2 s12">
    </div>
    </div>
    <!--/Form-->
    </blockquote>
    </main>