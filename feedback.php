<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $title = "კონტაქტი";
        require_once "blocks/head.php" 
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $("#done").click (function () {
                $('#messageShow').hide ();
                var name = $("#name").val ();                    
                var email = $("#email").val ();                    
                var subject = $("#subject").val ();                    
                var message = $("#message").val ();                    
                var fail = ""; 
                if (name.length < 3) fail = "სახელი არ შეიძლება იყოს 3 ასოზე ნაკლები";                
                else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) fail = "თქვენ შეიყვანეთ არასწორი Email";
                else if (subject.length < 5) fail = "თემა 5 სიმბოლოზე ნაკლებია";                 
                else if (message.length < 20) fail = "შეტყობინება 20 სიმბოლოზე ნაკლებია";  
                if (fail != "") { $('#messageShow').html (fail + "<div class='clear'><br></div>");
                                $('#messageShow').show ();
                                return false     
                }     
                $.ajax ({
                    url: '/ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name':name, 'email': email, 'subject': subject, 'message': message},
                    dataType: 'html',
                    success: function (data) {
                        if(data = 'შეტყობინება გაგზავნილია') {
                            $('#messageShow').html (data + "<div class='clear'><br></div>");
                            $('#messageShow').show ();
                        }
                    }
                });
            });
        });
    </script>
</head>
<body>

<?php require_once "blocks/header.php" ?>

    <div id="wrapper">
        <div id="leftCol">
                <input type="text" placeholder="სახელი" id="name" name="name"><br>
                <input type="text" placeholder="Email" id="email" name="email"><br>
                <input type="text" placeholder="შეტყობინება" id="subject" name="subject"><br>
                <textarea placeholder="შეიყვანეთ თქვენი შეტყობინება" name="message" id="message" cols="30" rows="10"></textarea><br>
                <div id="messageShow"></div>
                <input type="button" value="გაგზავნა" name="done" id="done">
            </div>
          <?php require_once "blocks/rightCol.php" ?>   
        </div>


    <?php require_once "blocks/footer.php" ?>
</body>
</html>