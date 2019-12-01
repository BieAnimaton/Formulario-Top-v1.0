<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["tName"] != "" AND $_POST["tEmail"] != "" AND $_POST["tPass"] != "") {
            $user = $_POST["tName"] . "<br>";
            $email = $_POST["tEmail"] . "<br>";
            $pass = $_POST["tPass"] . "<br>";

            echo $user . " " . $email . " " . $pass;
        }
    }
?>