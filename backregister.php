<?php
$mail = filter_var(trim($_POST['mail']));
$password = filter_var(trim($_POST['password']));
if ($password < 6){
    echo "Ваш пороль меньше 6 символов";
}
/*if ($password > 30){
    echo "Ваш пороль более 30 символов";
}*/
$password = md5($password);
$mysqli = new mysqli('localhost', 'root' , '', 'mybase');
if(mysqli_connect_errno()){
    echo "Ошибка подключения";
}
$mysqli->query("INSERT INTO `study`(`mail`, `password`) VALUES ('$mail', '$password')");
if ($mysqli->errno) {
    die('Insert Error (' . $mysqli->errno . ') ' . $mysqli->error);
}
$mysqli->close();
?>
