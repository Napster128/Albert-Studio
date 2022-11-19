<?php
//Если форма была отправленна, то выводим ее содержимое на экран
if (isset($_POST["name"])) { 
    echo "Ваше имя: " . iconv("utf-8", "utf-8", $_POST["name"]) . "<br/>"; 
    echo "Ваша почта: " . $_POST["email"] . "<br/>";
    echo "Ваше описание: " . $_POST["comment"] . "<br/>";
}
?>