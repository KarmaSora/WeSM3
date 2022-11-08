<?php
    /**
     * Formaterar och sparar namn samt meddelande till filen
     * msg.dat
     * 
     * Programmet saknar nödvändiga kontroller
     * @author Henrik Bygren
     */
     
    $name = "<hr><p>Från: " . $_POST['name'] . "</p>";
    $msg = "<p>" . $_POST['message'] . "</p>";
    
    file_put_contents("msg.dat",$name.$msg,FILE_APPEND);
    
    header("location: klotter.php"); //Omdirigerar till klotterplanket
?>