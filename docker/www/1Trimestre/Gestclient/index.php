<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestclient</title>
  
</head>

<body>

  <div style="background-color: lightblue;">
    <div >
      <h1 >GESTCLIENT</h1>
      <h2>Gestión de clientes de CertiBank</h2>
      <?php
      include "functions/functions.php";
      // Conexión a la base de datos
     $conn=createConnection();

      //obtener la acción del botón que se ha pulsado en el formulario
      

     try{ 
      // Dar de baja un cliente
      if (isset($_GET['action']) && $_GET['action'] == 'create') {
        createClient($conn);
      }

      // Dar de alta un cliente
      if (isset($_GET['action']) && $_GET['action'] == 'remove') {
        removeclient($conn);
      }

      // Modificar un cliente
      if (isset($_GET['action']) && $_GET['action'] == 'modify') {
      modifyClient($conn);
      }
     }catch(PDOException $e){
      displayError("error de conexion" .$e ->getMessage());
     }
 
      $consulta;
      ?>

      <table >
        <tr>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th></th>
        </tr>

        <form action="index.php" method="GET">
          <tr>
            <td><input type="text" name="dni"></td>
            <td><input type="text" name="nombre"></td>
            <td><input type="text" name="direccion"></td>
            <td><input type="text" name="telefono"></td>
            <input type="hidden" name="accion" value="crear">
            <td><input type="submit" value="Añadir"></td>
          </tr>
        </form>

        <?php
        //mostrar los clientes de la bd en la tabla
        
      
        ?>
      </table>
    </div>
  </div>



</body>

</html>