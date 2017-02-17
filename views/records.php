    <blockquote>
    <table id='large' class="responsive-table centered highlight tablesorter">
    <thead>
      <tr>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">ID</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Nombre</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Apellido M</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Apellido P</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Edad</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Género</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Correo</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Archivos</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Editar</th>
        <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        require_once ("config/db.php");
        $sql    = "SELECT * FROM pacientes ORDER BY id_paciente ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
          //--Output data of each row
          while($row = $result->fetch_assoc())
          {?>
            <tr>
                <td><?= $row["id_paciente"] ?></td>
                <td><?= $row["nombre"] ?></td>
                <td><?= $row["apellido1"] ?></td>
                <td><?= $row["apellido2"] ?></td>
                <td><?= $row["edad"] ?></td>
                <td><?= $row["genero"] ?></td>
                <td><?= $row["correo"] ?></td>
                <td><a href=<?= 'file.php?id='.$row["id_paciente"].''?> class='material-icons grey-text'>attach_file</a></td>
                <td><a href=<?= 'edit.php?id='.$row["id_paciente"].''?> class='material-icons green-text'>edit</a></td>
                <td><a href=<?= 'delete.php?id='.$row["id_paciente"].''?> class='material-icons red-text'>delete</a></td>
            </tr>
          <?php
          }
        }
        else
        {
          echo "<div class='row center-align red white-text' style='border: 1px dotted gray'><b>0 resultados</b></div>";
        }
        $conn->close();
      ?>
    </tbody>
    </table>
    </blockquote>
    <!--/Main-->
    </main>