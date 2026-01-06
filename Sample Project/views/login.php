<?php

?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <form action="../controllers/authControl.php" method="GET">
            User ID:
            <input type="text" name="userId" placeholder="input your user Id"><br>
            <span id="idErr" name="idErr"><?php if(isset($_GET["idErr"])){echo $_GET["idErr"];} ?></span><br>

            Password:
            <input type="password" name="pass"><br>
            <span id="passErr" name="passErr"><?php if(isset($_GET["passErr"])){echo $_GET["passErr"];} ?></span><br><br>

            <input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="reset">
        </form>
        <span id="genErr" name="genErr"><?php if(isset($_GET["genErr"])){echo $_GET["genErr"];} ?></span>
    </body>
</html>