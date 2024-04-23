<?php
    require_once("../../config/conexion.php");
    session_destroy();
    header("Location:"."http://localhost:80/proyecto_helpdesk/view/"."index.php");
    exit();
?>