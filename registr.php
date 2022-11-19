<?php
$fio=$_POST['fio'];
$email=$_POST['email'];
$tel=$_POST['tel'];
if (preg_match('/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/', $tel) == 1)
{
    $temp = preg_match('/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/', $tel);
    // echo "Gjg <b>$temp</b>";
    echo "телефон введен корректно <br><br>";
    echo "Вы корректно заполнили форму! <br><br>";
    echo "Ваше ФИО:  <b> $fio</b><br>";
    echo "Ваш e-mail:  <b> $email</b><br>";
    echo "Ваш телефон:  <b> $tel</b><br>";
}
else {
    $temp = preg_match('/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/', $tel);
    // echo "Gjg <b>$temp</b>";    
    echo "телефон введен не корректно!!!<br>";
}

?>