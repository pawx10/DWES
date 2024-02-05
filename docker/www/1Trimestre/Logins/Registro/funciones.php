<?php
function unsetSingVariables(){
    unset($_SESSION["username-singup"]);
    unset($_SESSION["password-singup"]);
    unset($_SESSION["password-singup-confirm"]);
}