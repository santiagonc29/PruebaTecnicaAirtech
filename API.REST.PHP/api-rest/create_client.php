<?php
    require_once('../includes/Client.class.php');
    echo "Method ".$_SERVER['REQUEST_METHOD'];
    echo "name: ".$_POST['name'];
    echo "city: ".$_POST['city'];
    echo "tel: ".$_POST['telephone'];
    echo "mail: ".$_POST['email'];

    if($_SERVER['REQUEST_METHOD'] == 'POST' 
        && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['city'])  && isset($_GET['telephone'])){
            Client::create_client($_GET['email'], $_GET['name'], $_GET['city'], $_GET['telephone']);
        }

?>