<?php
function connect() {

    $link = mysqli_connect("localhost", "employee", "1234", "ci_adaptachion");

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    /*
    $dben = 0;
    $link_id = mysqli_connect('localhost', 'employee', '1234', 'ci_adaptachion');
    if ($link_id) {
        if (mysqli_select_db('studyProcess', $link_id)) {
            $dben = 1;
        } else {
            $dben = -1;
            echo "<p class='error'>Ошибка выбора БД.</p>";
            exit;
        }
    } else {
        echo "<p class='error'>Ошибка подключения.</p>";
        exit;
    }
    mysqli_query("SET NAMES 'utf8';");
    mysqli_query("SET CHARSET 'utf8';");
    mysqli_query("SET SESSION collation_connection='utf_general_ci'");
    */
}
?>
