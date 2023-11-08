<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>emailadres</label>
        <input type="text" name="emailadres" placeholder="emailadres">

        <label>wachtwoord</label>
        <input type="password" name="wachtwoord" placeholder="wachtwoord">

        <button type="submit">inloggen</button>
    </form>
</body>
</html>