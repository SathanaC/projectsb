<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['users'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("details", $_POST['users'])) {
            echo "Login Success";
        } else echo "No load";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
