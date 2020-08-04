<?php
    include "db.php";

	function createUser()
	{
		global $connection;
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		/* Jelszó titkosítás */
		$hashFormat = "$2y$10$";
		$salt = "iusesomecrazystrings22";
		$hashF_and_salt = $hashFormat . $salt;

		$password = crypt($password, $hashF_and_salt);

		/* MySQL Injectionök ellen jó */
		mysqli_real_escape_string($connection, $username); 
		mysqli_real_escape_string($connection, $password);

		//regisztracio
		$query = "INSERT INTO users(username, password)";
		$query .= "VALUES ('$username', '$password')";

		$result = mysqli_query($connection, $query);
		if(!$result) {
			die('Query FAILED' . mysqli_error());
		}

		if(!$username || !$password)
		{
			echo "Hibás adatok";
			echo "<br>";
		}
		else { echo "Új user létrehozása sikeres! <br>"; }
	}

    function showAllData()
    {
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_error());
        }

        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }
	
	function updateSQL()
	{
		global $connection;
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		
		$query = "UPDATE users SET ";
		$query .= "username = '$username', ";
		$query .= "password = '$password' ";
		$query .= "WHERE id = $id";
		
		$result = mysqli_query($connection, $query);	
		if(!$result) { //ha nem sikerült a query-t elküldeni
			die("QUERY FAILED! " . mysqli_error($connection));
		}
		else { echo "Frissítés sikeres! <br>"; }
	}
	
	function deleteRows()
	{
		global $connection;

		$id = $_POST['id'];
		
		$query = "DELETE FROM users ";
		$query .= "WHERE id = $id";
		
		$result = mysqli_query($connection, $query);	
		if(!$result) {
			die("QUERY FAILED! " . mysqli_error($connection));
		}
		else { echo "Törlés sikeres! <br>"; }
	}
?>