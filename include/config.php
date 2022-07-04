
<?php
error_reporting(0);
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $dbcon = mysqli_connect("localhost", "root", "", "nspsjadugora_db");
} else {
    $dbcon = mysqli_connect("localhost", "nspsjadugora_db", "TdUE8FLwiC", "nspsjadugora_db");

    if ($dbcon->connect_error) {
        die("Connection Wrong: " . $dbcon->connect_error);
    }
}

?>


