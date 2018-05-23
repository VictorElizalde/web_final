<?php
        session_unset();
        session_start();

        $email = $_POST['email'];
        $name = $_POST['name'];

        $_SESSION["email"] = $email;

        $conn = mysqli_connect('localhost', 'id4998352_elizavic', 'Vicfirth4.', 'id4998352_webproject');

        if(!$conn) {
          die('Connection failed: ' . mysqli_connect_error());
        }

        $sql = "INSERT INTO `User` (name, email) VALUES ('$name', '$email')";
        $result = mysqli_query($conn, $sql);
        mysqli_free_result($result);
        mysqli_close($conn);
?>
