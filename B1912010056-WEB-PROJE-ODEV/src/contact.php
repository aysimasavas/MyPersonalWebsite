<?php

$name_surname = $_POST["name-surname"];
$email = $_POST["email"];
$gender = $_POST["radios"];
$city = $_POST["city"];
$msg = $_POST["mesaj"];


if($msg != null){

    echo ($name_surname);echo "<br><hr>";
    echo ($email);echo "<br><hr>";
    echo ($gender);echo '<br><hr>';
    echo ($city);echo '<br><hr>';
    echo ($msg);echo '<br><hr>';
}else {
        echo ($name_surname);echo '<br><hr>';
        echo ($email);echo '<br><hr>';
        echo ($gender);echo '<br><hr>';
        echo ($city);echo '<br><hr>';
        echo ("Mesaj Yok");echo '<br><hr>';
}

?>