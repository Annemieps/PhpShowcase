<?php
require_once './Business/boodschapService.php';

if (isset($_GET["action"]) && $_GET["action"] == "invoegen") {
    $boodschapService=new boodschapService;
    $boodschapService->voegNieuweBoodschapIn($_POST["naam"], $_POST["email"], $_POST["bericht"]);
    
}