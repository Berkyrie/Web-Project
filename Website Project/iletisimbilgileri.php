<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bilgileriniz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body class="bodyile">
    <div class="iletisimdiv">
        
             Adınız:<?php echo " ".$_POST["firstname"];?><br>
            Soyadınız:<?php echo " ".$_POST["lastname"];?><br>
            E-mailiniz:<?php echo " ".$_POST["email"];?><br>
            Yaşınız:<?php echo " ".$_POST["age"];?><br>
            <?php $gender= $_POST["cinsiyet"];?>

            Cİnsiyetiniz: <?php echo " ".$gender;?><br>
            Şehir: <?php echo " ".$_POST["city"];?><br>

            Konu: <?php echo " ".$_POST["subject"];?><br><br>
            Bilgileriniz Gönderilmiştir.<br><br>
            Ana sayfaya dönmek için <?php echo " "?><a href="hakkimda.html">tıklayınız.</a>
       
    </div>
</body>

</html>
