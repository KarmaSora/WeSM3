<?php    
    session_start();

    if(isset($_POST['password'],$_POST['username'])){        

        if($_POST['password'] == '12345' && $_POST['username']=='admin'){
            $_SESSION['inloggad'] = true;    // Användaren har anget rätt uppgifter.
            $_SESSION['user'] = $_POST['username'];
        }
    }

    // Om lyckad inloggning gå till index.php. Annars gå vidare och visa formuläret.
    if(isset($_SESSION['inloggad'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8" >
    <title>Sessioner</title>
</head>

<body>
    <form method="post" >
        Username: <input type="text" name="username" size="20" /><br />
        Password: <input type="password" name="password" size="20" /><br />
        <input type="submit" value="Logga in" name="login"/>
    </form> 

</body>
</html>