<?php
require_once '../Entities/boodschap.php';

class BoodschapDAO{
    
    public function insertBoodschap($naam,$email,$boodschap){
        $dba = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", 
			"cursusgebruiker", "cursuspwd");
        $sql="insert into berichtenportfolio (naam,email,boodschap) values(:naam,:email,:boodschap)";
        $stmt=$dba->prepare($sql);
        $stmt->execute(array(':naam'=>$naam,':email'=>$email,':boodschap'=>$boodschap));
        $dba=null;        
    }
}