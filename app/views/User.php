<?php 
    DB::insert('insert into users(id, Username, Firstname, Lastname , Password, email) values (?,?,?,?,?,?)', array ('NULL', $_POST["Username"], $_POST["First Name"], $_POST["Last Name"], $_POST["password"], $_POST["email"]));
?>
