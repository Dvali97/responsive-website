<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        echo 'შეავსეთ ყველა ველი';
        exit;
    }
    // გაგზავნა
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $subject = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    if (mail("ditodvali1997@gmail.com", $subject, $message, $headers)){
        echo "შეტყობინება გაგზავნილია";
    } else {
        echo "შეტყობინება არ გაიგზავნა";
    }
?>