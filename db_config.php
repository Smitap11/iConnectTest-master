<?php
function db_connect($host,$user,$pass,$db) {
    $mysqli = new mysqli($host, $user, $pass, $db);
    if($mysqli->connect_error)
        die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    return $mysqli;
}
$connect = mysqli_connect('localhost', 'root', "", 'iConnectTest');

?>