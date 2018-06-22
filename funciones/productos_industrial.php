<?php
  include_once('/conexion.php');
 ?>
 <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
   <?php
   $stmt = $con->prepare("Select Nombre from productos_industrial where idcategoria= ?");
   $stmt->bind_param("i",$categoria['id']);
   $stmt->execute();
   $stmt->bind_result($nombre_cat);
   while ($stmt->fetch()) { ?>
     <a class="dropdown-item" href="/funciones/productos_industrial.php">
      <?php echo $nombre_cat ?>
     </a>
   <?php } ?>

   <?php
       try {
         $sql_categoria = "Select * from categoria_industrial";
         $resultado_categoria= $con->query($sql_categoria);
         while ($categoria = $resultado_categoria->fetch_assoc()) { ?>
           <div class="btn-group" role="group">
             <button type="button" class="btn btn-secondary">
             <?php echo $categoria['Nombre']?>
             </button>
           </div>
         <?php
         }
       }
       catch (Exception $e) {
         $error = $e->getMessage();
         echo $error;
       }

       ?>
