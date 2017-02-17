<!--Panel-->
    <blockquote>
    <?php
    if (is_dir("uploads/paciente".$_GET['id']."/"))
    {
        //--If the folder exists - Show the files
        $files = scandir("uploads/paciente".$_GET['id']."/");
        ?>
        <table id='large' class="responsive-table highlight tablesorter ">
        <thead>
            <tr>
                <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Partida</th>
                <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Tipo</th>
                <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Nombre</th>
                <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Extensión</th>
                <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Tamaño</th>
                <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Abrir</th>
                <th class="tooltipped" data-position="top" data-delay="5" data-tooltip="Ordenar">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php        
        $i = 1;
        foreach ($files as $archivo) {
            if ($archivo == "." or $archivo == ".." or $archivo == "" or $archivo == " ")
            {
                echo "";
            }
            else
            {
                echo "<tr>";
                echo "<td>".$i."</td>";
                if (strpos($archivo, ".txt") == true) {
                    echo "<td><i class='material-icons grey-text'>insert_drive_file</i></td>";
                }
                else if (strpos($archivo, ".xls") == true) {
                    echo "<td><i class='material-icons green-text'>insert_drive_file</i></td>";
                }
                else if (strpos($archivo, ".doc") == true) {
                    echo "<td><i class='material-icons blue-text'>insert_drive_file</i></td>";
                }
                else if (strpos($archivo, ".ppt") == true) {
                    echo "<td><i class='material-icons orange-text'>insert_drive_file</i></td>";
                }
                else if (strpos($archivo, ".pdf") == true) {
                    echo "<td><i class='material-icons' style='color: maroon'>insert_drive_file</i></td>";
                }
                else if (strpos($archivo, ".rar") == true) {
                    echo "<td><i class='material-icons red-text'>layers</i></td>";
                }
                else if (is_dir("uploads/paciente".$_GET['id']."/".$archivo))
                {
                    echo "<td><i class='material-icons yellow-text'>folder_open</i></td>";
                }
                else
                {
                   echo "<td><i class='material-icons black-text'>insert_drive_file</i></td>"; 
                }       
                $fileinfo = pathinfo($archivo);
                echo "<td>".$fileinfo['filename']."</td>";
                echo "<td>".end(explode(".", $archivo))."</td>";

                $size = filesize( $_SERVER["DOCUMENT_ROOT"]."/uploads/paciente".$_GET['id']."/".$archivo);
                //$newsize = ($size/1024);
                echo "<td>".round($size, 0, PHP_ROUND_HALF_UP)." kB"."</td>";
         
                echo "<td><a href='"."uploads/paciente".$_GET['id']."/".$archivo."' target='_blank' class='material-icons grey-text'>open_in_browser</a></td>";
               // echo "<td><a href='".unlink("uploads/paciente".$_GET['id']."/".$archivo)."' class='material-icons red-text'>delete</a></td>";
                echo "<tr>";
                $i = $i+1;
            }
        }
        ?>         
        </tbody>
        </table>
    <?php
    }
    else
    {
        //--If the folder does not exist - Crete one
        echo "fail";
        mkdir("uploads/paciente".$_GET['id']."");
        //--Reload the GET page
        header('Location: /file.php?id='.$_GET['id'].'');
    }
    ?>
    </blockquote>    
    </blockquote>
    </main>
    <!--Content-->
    <script type="text/javascript">
        <?php  
        $uploaddir = 'uploads/';   
        $file = $uploaddir . basename($_FILES['uploadfile']['name']);      
        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {   
          echo "success";   
        } else {  
            echo "error";  
        }  
        ?>
    </script>
    <script type="text/javascript" >
        $(function(){
            var btnUpload=$('#upload');
            var status=$('#status');
            new AjaxUpload(btnUpload, {
                action: 'upload-file.php',
                name: 'uploadfile',
                onSubmit: function(file, ext){
                     if (! (ext && /^(jpg|png|jpeg|gif|pdf|txt|xlsx|docx)$/.test(ext))){ 
                        // extension is not allowed 
                        status.text('Only JPG, PNG or GIF files are allowed');
                        return false;
                    }
                    status.text('Uploading...');
                },
                onComplete: function(file, response){
                    //On completion clear the status
                    status.text('');
                    //Add uploaded file to list
                    if(response==="success"){
                        $('<li></li>').appendTo('#files').html('<i class="material-icons green-text">done</i>'+'<b style="color: green">Archivo subido con éxito</b>'+'<br><br>'+'<div class="chip">'+file+'</div>').addClass('success');
                    } else{
                        $('<li></li>').appendTo('#files').text(file).addClass('error');
                    }
                }
            });
            
        });
    </script>