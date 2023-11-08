<?php
include "db_connection.php";

if (isset($_POST['email']) && isset($_POST['herhaal_wachtwoord'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $email = validate($_POST['herhaal_wachtwoord']);

    if (empty($email)){
        header("Location: login.php?error = email is verplicht");
        exit();

    }else if(empty($herhaal_wachtwoord)){
        header("Location: login.php?error = wachtwoord is verplicht");
        exit();

    }else{
        $sql = "SELECT * FROM email WHERE email='email' AND herhaal_wachtwoord='$pass'"

        $result = msqli_query($conn, $sql)

        if (mysqli_num_rows(result)){
        echo"hoi";
        }
    } 

}else{
    header("Location: login.php");
    exit();
}
?>