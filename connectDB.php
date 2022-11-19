<?php

$link = mysqli_connect('myweb','root','root','albert_web');

if (mysqli_connect_errno()){
    echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}

echo 'привет';