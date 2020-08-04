<?php
    include "db.php";

    //olvasas
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Listázás</title>
    <link rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
     crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
			<h1 class="text-center">Listázás</h1>
            
            <?php
                while($row = mysqli_fetch_row($result)) { //asszociativ arrayt ad vissza a mysqli_fetch_row
                    ?>
                    <div class="card">
                        <div class="card-body">

                            <?php
                                print_r($row);
                            ?>

                        </div>
                    </div>

                    <?php
                }
            ?>

        </div>
    </div>
</body>
</html>