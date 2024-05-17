<?php

class Connection {
    private $db = "makanguys.db";
    public $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("sqlite:".__DIR__."\\".$this->db);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            //resto
            $sql_create1 = "CREATE TABLE IF NOT EXISTS `resto`(
                `id` integer NOT NULL PRIMARY KEY AUTOINCREMENT,
                `name` text NOT NULL ,
                `image_url` text NOT NULL,
                `address` text NOT NULL,
                `location` text NOT NULL,
                `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP)";
            $this->pdo->exec($sql_create1);
            //daftar makanan
            $sql_create2 = "CREATE TABLE IF NOT EXISTS `restomenu`(
                `id` integer NOT NULL PRIMARY KEY AUTOINCREMENT,
                `restoid` integer NOT NULL,
                `name` text NOT NULL,
                `price` integer NOT NULL,
                `image_url` text NOT NULL,
                `description` text NOT NULL,
                FOREIGN KEY (restoid) REFERENCES resto(id)
                )";
            $this->pdo->exec($sql_create2);

            ///user
            $sql_create3 = "CREATE TABLE IF NOT EXISTS `user`(
                `name` text NOT NULL PRIMARY KEY,
                `password` text NOT NULL,
                `key` text NOT NULL)";
            $this->pdo->exec($sql_create3);

            } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
     }

     public function adduser($name,$password,$key){
        $query = "insert into user (name,password,key) values (?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $res = $stmt->execute([$name, $password,$key]);
        if ($res){
            $data = ['name'=>$name, 'pass'=> $password, 'key' => $key];
            echo json_encode(['sukses'=>$data]);
        } else {
            echo json_encode(['error'=>$stmt->errorCode()]);
        }
     } 
     public function getuser($name,$pass){
        $query = "select * from user where name = '".$name."' and password = '".$pass."'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ($data);
     }
     public function getAlluser(){
        $query = 'select * from user';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
     }
     public function getAllResto(){
        $query = 'select * from resto order by created_at desc';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
     }
     public function getResto($id){
        $query = 'select * from resto where id = '.$id;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
     }

     public function addResto($name,$image_url,$address,$location){
        $query = "insert into resto (name,image_url,address,location) values (?,?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $res = $stmt->execute([$name, $image_url,$address,$location]);
        if ($res){
            $data = ['name'=>$name, 'image_url'=> $image_url,'address' => $address,'location' => $location];
            echo json_encode(['sukses'=>$data]);
        } else {
            echo json_encode(['error'=>$stmt->errorCode()]);
        }
     }
     
     public function deleteResto($id){
        $query = "delete from resto where id = ?";
        $stmt = $this->pdo->prepare($query);
        $res = $stmt->execute([$id]);
        if ($res){
            $data = ['id'=>$id];
            echo json_encode(['sukses'=>$data]);
        } else {
            echo json_encode(['error'=>$stmt->errorCode()]);
        }
     }

     public function updateResto($id,$name,$image_url,$address){
        $query = "UPDATE resto SET `name`= ? ,`image_url`= ? ,`address` = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        $res = $stmt->execute([$name, $image_url,$address,$id]);
        if ($res){
            $data = ['id'=>$id];
            echo json_encode(['sukses'=>$res]);
        } else {
            echo json_encode(['error'=>$stmt->errorCode()]);
        }
     }
     
     public function getAllMenuResto(){
        $query = 'select * from restomenu';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
     }
     public function getMenuResto($id){
        $query = 'select * from restomenu
                where restoid = '. $id;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
     }
     public function addMenuResto($restoid,$name,$price,$image_url,$description){
        $query = "insert into restomenu (restoid,name,price,image_url,description) values (?,?,?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $res = $stmt->execute([$restoid, $name,$price,$image_url,$description]);
        if ($res){
            $data = ['restoid'=>$restoid,'name'=>$name, 'price'=> $price,'image_url' => $image_url,'description' => $description];
            echo json_encode($data);
        } else {
            echo json_encode(['error'=>$stmt->errorCode()]);
        }
     }

     public function deleteMenuResto($id){
        $query = "delete from restomenu where id = ?";
        $stmt = $this->pdo->prepare($query);
        $res = $stmt->execute([$id]);
        if ($res){
            $data = ['id'=>$id];
            echo json_encode($data);
        } else {
            echo json_encode(['error'=>$stmt->errorCode()]);
        }
     }
  }
?>