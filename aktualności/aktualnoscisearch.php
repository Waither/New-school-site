<?php
    setcookie("search", $_POST["search"], time() + 360);
    header("location: aktualnosci.php");
    exit();
?>