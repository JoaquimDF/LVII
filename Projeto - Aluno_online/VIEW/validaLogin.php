<?php
if (!isset($_SESSION["login"])) {
    echo "<script>";
    echo "window.location.href = '../login.php';";
    echo "</script> ";
}
?>
