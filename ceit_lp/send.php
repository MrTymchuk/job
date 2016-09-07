<?php
    $recepient = "mr.tymchuk@gmail.com";
    $sitename = "CEIT - Landing Page Front End";

    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $mail = trim($_POST["mail"]);

    echo $name, $phone;

    $message = "Имя: $name \nТелефон: $phone";

    $pagetitle = "Новая заявка с сайта \"$sitename\"";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>