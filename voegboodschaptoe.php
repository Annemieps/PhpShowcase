<?php
require_once './Business/boodschapService.php';
require_once './Exceptions/VeldIsLeegException.php';

if (isset($_GET["action"]) && $_GET["action"] == "invoegen") {
    try{
        $boodschapService= new boodschapService;
        $boodschapService->voegNieuweBoodschapIn($_POST["naam"], $_POST["email"], $_POST["boodschap"]);
        header("location: index.php");
        exit(0);
        
    }
    catch (VeldIsLeegException $ex)
    {
        header("location:voegboodschaptoe.php?error=veldenleeg");
        exit(0);
    }
    

   }
   
;