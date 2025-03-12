<?php
    require_once('../includes/Client.class.php');

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $clients = Client::get_all_clients();
        echo $clients;
        }

?>