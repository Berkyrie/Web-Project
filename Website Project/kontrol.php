<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body class="basarilibody">
    <?php
        $name=$_POST["id"];
        $sifre=$_POST["password"];
    ?>
    <?php   
        if(($name=="b191210371@ogr.sakarya.edu.tr")&&($sifre=="982264")) {
            
            echo "<h1>BAŞARILI GİRİŞ!!!</h1>";
            
            die('Siteye devam etmek için <a href="hakkimda.html">buraya</a> tıklayınız');
        }
        else{
            echo "<h1>BAŞARISIZ GİRİŞ!!!</h1>";
            
            die('Giriş sayfasına dönmek için <a href="login.php">buraya</a> tıklayınız');
        }
    ?>
    
</body>
</html>
