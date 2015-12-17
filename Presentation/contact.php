<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="voegboodschaptoe.php?action=invoegen" method="post">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Naam">Naam</label>
                    <input type="text" class="form-control" id="naam" name="naam" placeholder="Naam">
                </div>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="message">Boodschap</label>
                    <br>
                    <input type="text" class="form-control" id="boodschap" name="boodschap" placeholder="Uw boodschap" >
                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
        <?php
        var_dump($_POST);
        if (isset($error) && $error=="veldenleeg"){
            ?>
			<p style="color: red">Alle velden invullen!</p>
			<?php

        }
        ?>
    </body>
</html>
