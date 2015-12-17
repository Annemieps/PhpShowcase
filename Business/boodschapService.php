<?php
require_once 'Data/BoodschapDAO.php';


class boodschapService{
  public function voegNieuweBoodschapIn($naam, $email,$boodschap) 
  {
      if (is_null($naam) || is_null($email) ||  is_null($boodschap))
      {
          throw new VeldIsLeegException();    
      }   
      else 
      {
        $boodschapDAO = new BoodschapDAO();
	$boodschapDAO->insertBoodschap($naam, $email, $boodschap);
      }
  }
}