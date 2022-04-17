<?php
    $connect = mysqli_connect("127.0.0.1", "root", "", "register-bd");
    $zapros_text_insert = "INSERT INTO users (login, name, pass) 
    VALUES ('{$_GET["login"]}', '{$_GET["name"]}', '{$_GET["pass"]}')";
    $zapros_insert = mysqli_query($connect, $zapros_text_insert);
    function Redirect($url, $permanent = false)
    {
        if (headers_sent() === false)
        {
            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        }

        exit();
    }

    Redirect('index3.php', false);
?>