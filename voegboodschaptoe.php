<?php

require_once './Business/boodschapService.php';
require_once './Exceptions/VeldIsLeegException.php';

//als er een action is en die action is invoegen dan
if (isset($_GET["action"]) && $_GET["action"] == "invoegen") {

    if (empty($_POST["naam"]) || empty($_POST["email"]) || empty($_POST["boodschap"])) {
        //boodschap laten verschijnen dat de velden leeg zijn en NIET in databank zetten. 
        header("location:presentation/index.php?error=leeg");
        exit(0);
    } else {
        if (filter_input(INPUT_POST, "naam", FILTER_SANITIZE_STRING)) {

            if (filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL)) {

                if (filter_input(INPUT_POST, "boodschap", FILTER_SANITIZE_STRING)) {
                    //boodschap word in de database gezet
                    $boodschapService = new boodschapService;
                    $boodschapService->voegNieuweBoodschapIn($_POST["naam"], $_POST["email"], $_POST["boodschap"]);
                    header("location: presentation/index.php");
                    exit(0);
                } else {
                    header("location:presentation/index.php?error=fouteboodschap");
                    exit(0);
                }
            } else {
                header("location:presentation/index.php?error=fouteemail");
                exit(0);
            }
        } else {
            header("location:presentation/index.php?error=foutenaam");
            exit(0);
        }
    }
} else {
    //boodschap laten verschijnen dat de velden leeg zijn en NIET in databank zetten. 
    header("location:presentation/index.php?error=fout");
    exit(0);
}

    

   
