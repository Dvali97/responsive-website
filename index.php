<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ახალი ამბები</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div id="logo">
            <a href="/" title="მთავარ გვერდზე გადასვლა"><span>ს</span>იახლეები</a>
        </div>
        <div id="menuHead">
            <a href="/about.php">
                <div style="margin-right: 5%;">ჩვენს შესახებ</div>
            </a>
            <a href="/feedback.php">
             <div>კონტაქტი</div>
            </a>
        </div>
        <div id="regAuth">
           <a href="/reg.php">
               რეგისტრაცია
           </a> | 
           <a href="/auth.php">
               ავტორიზაცია
           </a>
        </div>
    </header>

    <footer>
        <div id="social">
            <a href="http://vk.com" title="ჯგუფი VK" target="blank">
                <img src="/img/vk.png" alt="VK" title="VK">
            </a>
            <a href="http://facebook.com" title="ჯგუფი facebook" target="blank">
                <img src="/img/facebook.png" alt="Facebook" title="Facebook">
            </a>
            <a href="http://twitter.com" title="ჯგუფი twitter" target="blank">
                <img src="/img/twitter.png" alt="Twitter" title="Twitter">
            </a>
        </div>
        <div id="rights">
            ყველა უფლება დაცულია &copy; <?php echo date ('Y')?>
        </div>
    </footer>
</body>
</html>