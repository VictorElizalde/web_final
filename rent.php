<?php
        session_start();

        $email = $_SESSION["email"];
        $movie = $_POST['movie'];

        $conn = mysqli_connect('localhost', 'id4998352_elizavic', 'Vicfirth4.', 'id4998352_webproject');

        if(!$conn) {
          die('Connection failed: ' . mysqli_connect_error());
        }

        $sql = "SELECT id from User WHERE email = '$email';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row["id"];
        mysqli_free_result($result);

        $sql2 = "UPDATE `Movies` SET `user_id` = $id WHERE `Movies`.`name` = '$movie';";
        $result = mysqli_query($conn, $sql2);
        mysqli_free_result($result);
        mysqli_close($conn);
?>
