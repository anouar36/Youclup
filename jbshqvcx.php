<?php
namespace App\Models\UserModel;

use PDO;
Use App\Config\db;


class Users {
    private $conn;

    public function __construct(){

        $this->conn= db::conncetion();
    }


    public function affechUsers (){
        $sql = "SELECT * FROM Users";

        $stmt = $this->conn->prepare($sql);
        $stmt->fetchAll(PDO::FETCH_OBJ);
        $result=$stmt->execute();
        $Users= [];
        
        foreach($result as $user){
            $Users[]= new $Users($user['name'], $user['lastName'] ,$user['age'],$user['class'],$user['role'] );
        }
        return $Users;

    }
}

?>