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
            if (isset($_SESSION['id'])){
                $idActual = $_SESSION['id'];

                // Obtener las tareas del usuario actual
                $data["listatareas"] = $this->tarea->getTareasByUsuario($idActual);
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
            if (isset($_SESSION['id'])){
                $idActual = $_SESSION['id'];
            $titulo = $_REQUEST["titulo"];
            $descripcion = $_REQUEST["descripcion"];
                      
            $id = $_SESSION['id'];
            $result = $this->tarea->insert($titulo, $descripcion,$id);
            if ($result == 1) {
               
                $id = $this->tarea->getMaxId();
                $this->usuario->insertTareaUsuario($id, $id);
          
          
                
            
            }
            $data["listatareas"] = $this->tarea->getTareasByUsuario($_SESSION['id']);
            View::render("tarea/all", $data);
        }
    }
        // --------------------------------- BORRAR tareaS ----------------------------------------

          public function borrartarea() {
            // Recuperamos el id de la tarea que hay que borrar
            if (isset($_SESSION['id'])){
                $idActual = $_SESSION['id'];
            $id = $_REQUEST["id"];
   
            $result = $this->tarea->delete($id);
            }
            $data["listatareas"] = $this->tarea->getTareasByUsuario($idActual);
            View::render("tarea/all", $data);


            
        }

        // --------------------------------- FORMULARIO MODIFICAR tareaS ----------------------------------------

        public function formularioModificarTarea() {
            
            // Recuperamos los datos de la tarea a modificar
            $id = $_REQUEST["id"];
            $data["tarea"] = $this->tarea->get($id)[0];
            
            
            View::render("tarea/form", $data);
        }
        

        // --------------------------------- MODIFICAR tareaS ----------------------------------------

        public function modificartarea() {
            if (isset($_SESSION['id'])){
                $idActual = $_SESSION['id'];
            // Primero, recuperamos todos los datos del formulario
            $id = $_REQUEST["id"];
            $titulo = $_REQUEST["titulo"];
            $descripcion = $_REQUEST["descripcion"];
           
            // Pedimos al modelo que haga el update
            $result = $this->tarea->update($id, $titulo,$descripcion);
           
        
                
            
            $data["listatareas"] = $this->tarea->getTareasByUsuario($_SESSION['id']);
            View::render("tarea/all", $data);
        }
    }

        // --------------------------------- BUSCAR tareaS ----------------------------------------

        public function buscarTareas() {
             
        
            
            if(isset($_SESSION['id'])) {
                
                $textoBusqueda = $_REQUEST["textoBusqueda"];
                $idActual = $_SESSION['id'];
                $data["listatareas"] = $this->tarea->search($textoBusqueda, $idActual);
                View::render("tarea/all", $data);
            } else {
                echo "Debes iniciar sesión para ver tus tareas.";
            }
        }
        

    } 