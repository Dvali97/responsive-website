<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $title = "კონტაქტი";
        require_once "blocks/head.php" 
    ?>
    
</head>
<body>

<?php require_once "blocks/header.php" ?>

    <div id="wrapper">
        <div id="leftCol">
                <input type="text" placeholder="სახელი" id="name" name="name"><br>
                <input type="text" placeholder="Email" id="email" name="email"><br>
                <input type="text" placeholder="შეტყობინება" id="subject" name="subject"><br>
                <textarea placeholder="შეიყვანეთ თქვენი შეტყობინება" name="message" id="message" cols="30" rows="10"></textarea><br>
                <input type="button" value="გაგზავნა" name="done" id="done">
            </div>
          <?php require_once "blocks/rightCol.php" ?>   
        </div>


    <?php require_once "blocks/footer.php" ?>
</body>
</html>