<?php
require_once '../Data/BoodschapDAO.php';

class boodschapService{
  public function voegNieuweBoodschapIn($naam, $email,$boodschap) {
	$boodschapDAO = new BoodschapDAO();
	$boodschapDAO->insertBoodschap($naam, $email, $boodschap);
    }   
}