<?php

function get_data($link){
    
    $sql = "SELECT * FROM goods";

    $result = mysqli_query($link, $sql);

    // echo '<pre>';
    // var_dump($result);
    // echo '</pre>';

    // mysqli_fetch_all Преобразует $result в массив
    // MYSQLI_ASSOC делает из числовых индексов в названия столбцов
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $data;
}