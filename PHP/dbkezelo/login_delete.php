<?php 
    include "db.php"; //beincludeolja az adatbázishoz csatlakozást
    include "functions.php";

	if(isset($_POST['submit'])) 
	{
		deleteRows();
	}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Törlés</title>
    <link rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
     crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="login_delete.php" method="post">
				<h1 class="text-center">Törlés</h1>
                <div class="form-group">
                    <select name="id" id="">

                    <?php
						showAllData();
                    ?>

                    </select>
                </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Delete">
            </form>
        </div>
    </div>
</body>
</html>