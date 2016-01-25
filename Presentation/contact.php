<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../voegboodschaptoe.php?action=invoegen" method="post">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Naam">Naam</label>
                    <input type="text" class="form-control" id="naam" name="naam" placeholder="Naam" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="message">Boodschap</label>
                    <br>
                    <input type="text" class="form-control" id="boodschap" name="boodschap" placeholder="Uw boodschap" required>
                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
                <?php
                if (isset($_GET["error"]) && $_GET["error"] == "leeg"){
                    ?>
                                <p style="color: red">Alle velden invullen!</p>
                                <?php
                }
                if (isset($_GET["error"]) && $_GET["error"] == "fout"){
                    ?>
                                <p style="color: red">Correcte informatie invullen!</p>
                                <?php
                }
                ?>
            </div>
        </form>
        
    </body>
</html>
