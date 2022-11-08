<?php
    /**
     * Formaterar och sparar namn samt meddelande till filen
     * msg.dat
     * 
     * Programmet saknar nödvändiga kontroller
     * @author Henrik Bygren
     */
    if(isset($_POST['name'])){
     $cleanName = $_POST['name'];
     $cleanName = htmlspecialchars($cleanName);
     $cleanName = trim($cleanName);
     $cleanName = stripslashes($cleanName);
    }
    $name = "<hr><p>Från: " .$cleanName . "</p>";

    
if(isset($_POST['message'])){
    $cleanMsg = $_POST['message'];
    $cleanMsg = htmlspecialchars($cleanMsg);
    $cleanMsg = trim($cleanMsg);
    $cleanMsg = stripslashes($cleanMsg);

    }
    $msg = "<p>" . $cleanMsg . "</p>";
    
    file_put_contents("msg.dat",$name.$msg,FILE_APPEND);
    
    header("location: klotterplanket.php"); //Omdirigerar till klotterplanket
?>