<?php
session_start();

include("funciones.php");

if(!isset($_SESSION["correct_credentials"])){
    $_SESSION["correct_credentials"] = false;
}

if(isset($_POST["username-signup"]) && isset($_POST["password-signup"]) && isset($_POST["password-signup-confirm"])) {  
    $_SESSION["username-signup"] = $_POST["username-signup"];
    $_SESSION["password-signup"] = $_POST["password-signup"];
    $_SESSION["password-signup-confirm"] = $_POST["password-signup-confirm"];
}


if(!$_SESSION["correct_credentials"]) {
    if (isset($_SESSION["username-signup"]) && isset($_SESSION["password-signup"]) && isset($_SESSION["password-signup-confirm"])){
        if ($_SESSION["password-signup"] === $_SESSION["password-signup-confirm"]) {
            $username=$_SESSION["username-signup"];
            $password=hash("sha256", $_SESSION["password-signup"]);

            if(empty($username) || empty($password)){
                unsetSingVariables();
            
            echo "
            El usuario o la contraseña estan vacios
            <a href =\"views/registro.view.php\"><button>Intentar de nuevo</button></a>
            <a href =\"views/index.php\"><button>Volver a inicio</button></a>
            ";
        }else{
            if($username === "test" && $password === hash("sha256", "test")) {
             
                echo "
                El usuario ya existe
                <a href=\"login.php\"><button>Iniciar Sesion</button></a>
                <a href=\"index.php\"><button>Inicio</button></a>
                ";
               
            }else{
                unsetSingVariables();
                echo "
                Usuario no disponible
                <a href=\"views/registro.view.php\"><button>Iniciar Sesion</button></a>
                <a href=\"index.php\"><button>Inicio</button></a>
                ";
            }
        }
    }else{
        unsetSingVariables();
        echo "
        Las contraseñas no coinciden
        <a href=\"views/registro.view.php\"><button>Intentar de nuevo</button></a>
        <a href=\"index.php\"><button>Volver a inicio</button></a>
        ";
    }
            
        }else{
            header("Location: views/registro.view.php");
        }

    }else{
        echo" 
        Ya has iniciado sesion
        <a href=\"login.php\"><button>Iniciar Sesion</button></a>
        <a href=\"index.php\"><button>Inicio</button></a>
        ";
    }




?> 