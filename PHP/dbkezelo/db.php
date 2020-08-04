<?php
    //csatlakozas a mysql szerverhez
    //host - felhasználó - jelszó - database
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if(!$connection) { die("Database connection failed!"); }
?>