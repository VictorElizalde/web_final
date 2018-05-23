<?php
        session_unset();
        session_start();

        $email = $_POST['email'];
        $_SESSION["email"] = $email;

        mysqli_free_result($result);
        mysqli_close($conn);
?>
