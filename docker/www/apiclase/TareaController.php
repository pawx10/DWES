<?php
include_once("models/tarea.php");  // Modelos
include_once("models/usuario.php");
include_once("View.php");          // Plantilla de vista

class TareaController {
        private $db;             // Conexión con la base de datos
        private $tarea, $usuario;// Modelos

        public function __construct() {
            $this->tarea = new tarea();
            $this->usuario = new usuario();
            
        }

        // --------------------------------- MOSTRAR LISTA DE tareaS ----------------------------------------
        public function mostrarListatareas() {
            if (isset($_SESSION['idUsuario'])){
                $idUsuarioActual = $_SESSION['idUsuario'];

                // Obtener las tareas del usuario actual
                $data["listatareas"] = $this->tarea->getTareasByUsuario($idUsuarioActual);
                View::render("tarea/all", $data);
            }
        }

        // --------------------------------- FORMULARIO ALTA DE tareaS ----------------------------------------

         public function formularioInsertarTarea() {
            $data = array();  // Inicializa $data como un array vacío
            View::render("tarea/form", $data);
         }

        // --------------------------------- INSERTAR tareaS ----------------------------------------

        public function insertartarea() {
            // Primero, recuperamos todos los datos del formulario
            if (isset($_SESSION['idUsuario'])){
                $idUsuarioActual = $_SESSION['idUsuario'];
            $titulo = $_REQUEST["titulo"];
            $descripcion = $_REQUEST["descripcion"];
                      
            $idUsuario = $_SESSION['idUsuario'];
            $result = $this->tarea->insert($titulo, $descripcion,$idUsuario);
            if ($result == 1) {
               
                $idTarea = $this->tarea->getMaxId();
                $this->usuario->insertTareaUsuario($idUsuario, $idTarea);
          
          
                
            
            }
            $data["listatareas"] = $this->tarea->getTareasByUsuario($_SESSION['idUsuario']);
            View::render("tarea/all", $data);
        }
    }
        // --------------------------------- BORRAR tareaS ----------------------------------------

          public function borrartarea() {
            // Recuperamos el id de la tarea que hay que borrar
            if (isset($_SESSION['idUsuario'])){
                $idUsuarioActual = $_SESSION['idUsuario'];
            $idTarea = $_REQUEST["idTarea"];
   
            $result = $this->tarea->delete($idTarea);
            }
            $data["listatareas"] = $this->tarea->getTareasByUsuario($idUsuarioActual);
            View::render("tarea/all", $data);


            
        }

        // --------------------------------- FORMULARIO MODIFICAR tareaS ----------------------------------------

        public function formularioModificarTarea() {
            
            // Recuperamos los datos de la tarea a modificar
            $idTarea = $_REQUEST["idTarea"];
            $data["tarea"] = $this->tarea->get($idTarea)[0];
            
            
            View::render("tarea/form", $data);
        }
        

        // --------------------------------- MODIFICAR tareaS ----------------------------------------

        public function modificartarea() {
            if (isset($_SESSION['idUsuario'])){
                $idUsuarioActual = $_SESSION['idUsuario'];
            // Primero, recuperamos todos los datos del formulario
            $idtarea = $_REQUEST["idTarea"];
            $titulo = $_REQUEST["titulo"];
            $descripcion = $_REQUEST["descripcion"];
           
            // Pedimos al modelo que haga el update
            $result = $this->tarea->update($idtarea, $titulo,$descripcion);
           
        
                
            
            $data["listatareas"] = $this->tarea->getTareasByUsuario($_SESSION['idUsuario']);
            View::render("tarea/all", $data);
        }
    }

        // --------------------------------- BUSCAR tareaS ----------------------------------------

        public function buscarTareas() {
             
        
            
            if(isset($_SESSION['idUsuario'])) {
                
                $textoBusqueda = $_REQUEST["textoBusqueda"];
                $idUsuarioActual = $_SESSION['idUsuario'];
                $data["listatareas"] = $this->tarea->search($textoBusqueda, $idUsuarioActual);
                View::render("tarea/all", $data);
            } else {
                echo "Debes iniciar sesión para ver tus tareas.";
            }
        }
        

    } 