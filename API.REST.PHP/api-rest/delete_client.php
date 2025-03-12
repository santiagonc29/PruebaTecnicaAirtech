<?php
    require_once('../includes/Client.class.php');

    echo "id ".$_GET['id'];
    echo "Method: ". $_SERVER['REQUEST_METHOD']; 
    if($_SERVER['REQUEST_METHOD'] == 'DELETE' 
        && isset($_GET['id']) ){
            Client::delete_client_by_id($_GET['id']);
        }else {
            echo "No se pudo eliminar ";
        }

?>