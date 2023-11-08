<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="homepage.php" method="post">  <!-- hier word je naar de pagina gebracht als je op submit klikt-->
        
        <div class="form-group">
                <input type="email" name="email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="password" name="herhaal_wachtwoord" placeholder="Wachtwoord">
            </div>

        <div class="form-group">
                <input type="submit" value="registration" name="submit">
        </div>
        <div class="form-group">
                <input type="submit" value="submit" name="submit">
        </div>
</form>
</body>
</html>