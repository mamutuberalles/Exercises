<?php 
    include "db.php"; //beincludeolja az adatbázishoz csatlakozást
    include "functions.php";

	if(isset($_POST['submit'])) 
	{
		updateSQL();
	}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Frissítés</title>
    <link rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
     crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="login_update.php" method="post">
				<h1 class="text-center">Frissítés</h1>
                <div class="form-group">
                    <label for="username">Felhasználónév</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Jelszó</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">

                    <?php
                            showAllData();
                    ?>

                    </select>
                </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
</body>
</html>