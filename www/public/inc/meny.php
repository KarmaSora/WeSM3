<h1>Innehåll</h1>
<ul>
    <li><a href="index.php">Hem</a></li>
    <li><a href="index.php?page=blogg">Blogg</a></li>
    <li><a href="index.php?page=bilder">Bilder</a></li>
    <li><a href="index.php?page=kontakt">Kontakt</a></li>
</ul>
<?php

   $page = "start";
   if(isset($_GET['page']))
      $page = $_GET['page'];
              
      switch($page){
          case 'blogg': include('pages/blogg.php');
                         break;
          case 'bilder': include('pages/bilder.php');  
                         break;
          case 'kontakt':include('pages/kontakt.php'); 
                          break;
          default: include('pages/start.php');
      } 
?>