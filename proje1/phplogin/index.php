<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <form action="login.php" method="post">
        <h2>GİRİŞ YAP</h2>
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>
       
        
        <label>Kullanıcı Adı</label>
        <input type="text" name="uname" placeholder="Kullanıcı Adı">

        <label>Parola</label>
        <input type="password" name="password"placeholder="Parola"><br>
    

        <button type="submit">Giriş</button>

    </form>




    
</body>
</html>
