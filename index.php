<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $title = "ახალი ამბები";
        require_once "blocks/head.php" 
    ?>
    
</head>
<body>

<?php require_once "blocks/header.php" ?>

    <div id="wrapper">
        <div id="leftCol">
            <div id="bigArticle">
                <img src="/img/articles/1.jpg" alt="სტატია 1" title="სტატია 1">
                <h2>სტატია 1</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque deserunt velit voluptas nihil? Voluptate cum id at quia vero dolores dolor non voluptatum et! Tempore quae velit quis assumenda voluptatibus?</p>
                <a href="/article.php">
                    <div class="more">შემდეგ</div>
                </a>
            </div>
            <div class="clear"><br></div>
            <div class="article">
               <img src="/img/articles/2.jpg" alt="სტატია 1" title="სტატია 1">
                <h2>სტატია 1</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque deserunt velit voluptas nihil?</p>
                <a href="/article.php">
                    <div class="more">შემდეგ</div>
                </a>
            </div>
            <div class="article">
                <img src="/img/articles/3.jpg" alt="სტატია 1" title="სტატია 1">
                <h2>სტატია 1</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque deserunt velit voluptas nihil?</p>
                <a href="/article.php">
                    <div class="more">შემდეგ</div>
                </a>
            </div>
        </div>

    <?php require_once "blocks/rightCol.php" ?>

    <?php require_once "blocks/footer.php" ?>
</body>
</html>