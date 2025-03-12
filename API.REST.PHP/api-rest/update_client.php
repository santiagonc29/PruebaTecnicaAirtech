<?php
    require_once('../includes/Client.class.php');
    if($_SERVER['REQUEST_METHOD'] == 'GET' 
        && isset($_GET['id'], $_GET['email']) && isset($_GET['name']) && isset($_GET['city'])  && isset($_GET['telephone'])){
            Client::update_client($_GET['id'], $_GET['email'], $_GET['name'], $_GET['city'], $_GET['telephone']);
            header("Location: ../index.php?msg=Cliente actualizado correctamente");
        }else {
            echo "Error al actualizar el cliente.";
        }

?>