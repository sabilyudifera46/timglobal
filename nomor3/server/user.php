<?php
session_start();
include 'koneksi.php';
$db = new Connection();
header('Content-Type: application/json');
switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
            $db->getAlluser();
        break;
    case 'POST':
        if(isset($_GET['name']))
        {
            $name = $_GET['name'];
            $pass = $_POST['pass'];
            $r = $db->getuser($name,$pass);
            echo json_encode($r);
            if(isset($r[0]['key'])==true){
                $_SESSION["key"] = $r[0]['key'];
            }
            else{
                unset($_SESSION["key"]);
            }
        }
        else{
            $name = $_POST['name'];
            $image_url = $_POST['pass'];
            $bytes = random_bytes(20);
            $token = bin2hex($bytes);
            $db->adduser($name,$image_url,$token);
        }
        break;
}
?>