<?php
require_once 'Entities/boodschap.php';

class BoodschapDAO{
    
    public function insertBoodschap($naam,$email,$boodschap){
        $dba = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", 
			"cursusgebruiker", "cursuspwd");
        $sql="insert into berichtenportfolio (naam, email, bericht) values(:naam,:email,:boodschap)";
        $stmt=$dba->prepare($sql);
        $stmt->bindParam(":naam", $naam);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":boodschap", $boodschap);
        $stmt->execute();
        $dba=null;        
    }
}