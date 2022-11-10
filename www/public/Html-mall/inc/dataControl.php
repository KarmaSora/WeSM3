<?php
session_start();
// if (isset($_POST['password'], $_POST['username'])) {

//     if ($_POST['password'] == '12345' && $_POST['username'] == 'admin') {
//         $_SESSION['inLoggad'] = true;    // Användaren har anget rätt uppgifter.
//         $_SESSION['user'] = $_POST['username'];
//     }
// }

// // Om lyckad inloggning gå till index.php. Annars gå vidare och visa formuläret.
// if (isset($_SESSION['inloggad'])) {
//     header("Location: ../index.php");
// } else {
//     header("Location: ../index.php");
// }
    // För att förenkla användandet av mb_ funktioner
    mb_internal_encoding("UTF-8");     
    $file = "person.dat";
    include("Person.php");

if(!isset($_POST['username'])){
    header("location: index.php");
    exit;
}

    if(file_exists($file))
    $personArray = unserialize(file_get_contents($file));


    $user = $_POST['username'];
    $pwd = $_POST['password'];

  


for($i=0; $i<count($personArray); $i++){
    if($user == $personArray[$i]->getUserName() && $pwd == $personArray[$i]->getPassWord()){
        header("location: index.php" . "?name=" . $personArray[$i]->getUserName());
        exit;
    }
}
header("location: login.html");

?>
