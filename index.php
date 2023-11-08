<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <a href="login.php">
    <button class="knopje" type="button">login</button>
  </a>
  <a href="login.php">
    <button class="knopje" type="button">Sign up</button>
  </a>
    
<?php

if (isset($_POST['emailadres']) && isset($_POST['wachtwoord'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $emailadres = validate( $_POST['emailadres']);
    $wachtwoord = validate($_POST['wachtwoord']);

    if (empty($emailadres)){
        header("Location: login.php?error=Je hebt een ongeldige email ingevuld");
        exit();
    }elseif(empty($wachtwoord)){

        header("Location: login.php?error=Je hebt een ongeldig wachtwoord ingevuld");
        exit();

    }else{
        echo "Correct ingevuld";
    }

}
else{
    header("Location: login.php");
    exit();
}

?>

</body>
</html>