<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" type="text/css" href="loginstyle.css">

    <title>Login</title>
</head>

<body>
    <div class="login-title">
        <h1>Merhaba!</h1>
        <h2>Giriş Yapınız.</h2>
    </div>

    <div class="login-form">
        <form id="login-form" method="POST" action="kontrol.php">

            <input name="id" type="email" class="form-control" placeholder="Kullanıcı Adı" required>
            <br>
            <input name="password" type="password" class="form-control" placeholder="Şifre" required>
            <br>
            <input type="submit" class="form-control submit" value="Giriş">

        </form>

    </div>



</body>

</html>

