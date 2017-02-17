 <?php
    $_SESSION["paciente"] = $_GET['id'];
  ?>
    <main>
    <blockquote class="center-align">
    <div class="row" style="border: 1px dotted gray">
        <div class="col l10 m10 s12">
            <h5>Archivos del Paciente ID: <?= $_GET['id'] ?></h5>
            <!-- Upload Button-->  
        </div>
        <div class="col l1 m1 s6">
            <ul>
              <li><a href="records.php" class="btn-floating black"><i class="material-icons">arrow_back</i></a></li>
            </ul>
        </div>
        <div class="col l1 m1 s6">
            <ul>
              <li><a href="#modal1" class="btn-floating green"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>
    </div>
      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Subir archivos a la carpeta ID: <?= $_GET['id'] ?></h4>
          <hr>
            <div id="mainbody" >
                <!-- Upload Button, use any id you wish-->
                <br>
                <div id="upload" ><a class="waves-effect waves-light btn green"><i class="material-icons left">file_upload</i>Upload</a></div>
                <br>
                <blockquote id="status" style="color: red"><h5></h5></blockquote>
                <ul id="files" ></ul>
            </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
        </div>
      </div>

    </blockquote>