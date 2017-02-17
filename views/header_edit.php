  <?php
    $_SESSION["paciente"] = $_GET['id'];
  ?>
    <main>
    <blockquote class="center-align">
    <div class="row" style="border: 1px dotted gray">
        <div class="col l11 m10 s12">
            <h5>Editar datos del Paciente ID: <?= $_GET['id'] ?></h5>
            <!-- Upload Button-->  
        </div>
        <div class="col l1 m1 s12">
            <ul>
              <li><a href="records.php" class="btn-floating black tooltipped" data-position="top" data-delay="50" data-tooltip="Regresar"><i class="material-icons">arrow_back</i></a></li>
            </ul>
        </div>
    </div>
    </blockquote>