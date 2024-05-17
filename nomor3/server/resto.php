<?php
include 'koneksi.php';
session_start();
$db = new Connection();

header('Content-Type: application/json');

$header = apache_request_headers();
if(isset($_SESSION["key"])==false){
    echo "expired token";
    die;
}
else{
    if(strcmp($_SESSION["key"],$header['key'])==0){
        switch($_SERVER['REQUEST_METHOD']){
            case 'GET':
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $db->getResto($id);
                }
                else{
                    $db->getAllResto();
                }
                break;
            case 'POST':
                if(isset($_GET['id'])){//update
                    $id = $_GET['id'];
                    $name = $_POST['name'];
                    $image_url = $_POST['image_url'];
                    $address = $_POST['address'];
                    
                    $db->updateResto($id,$name,$image_url,$address);
                }else{//insert
                    $name = $_POST['name'];
                    $image_url = $_POST['image_url'];
                    $address = $_POST['address'];
                    $location = "";
                    $db->addResto($name,$image_url,$address,$location);
                }
                break;
            case 'DELETE':
                $id = $_GET['id'];
                $db->deleteResto($id);
                break;
            default:
                break;
        }
    }else{
        echo "wrong password or username";
    }
}
    

?>