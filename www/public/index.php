<?php
// PUNKT 1
session_start();
// PUNKT 2    
if (isset($_POST['password'])) {
  if ($_POST['password'] == '12345' && $_POST['username'] == 'admin') {
    $_SESSION['inLoggad'] = true;
  }
}
?>

<!doctype html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <title>Länka in med PHP</title>
  <link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>



<body>
  <div id="wrapper">
    <header>
      <?php include("inc/header.php"); ?>
    </header><!-- header -->

    <section id="leftColumn">
      <nav>
        <?php include("inc/meny.php"); ?>
      </nav>
      <aside>
        <?php include("inc/aside.php"); ?>
      </aside>
    </section><!-- End leftColumn -->

    <main>
      <section>
        <!-- Lägg in innehållet här -->
        <?php
        $page = "start";
        if (isset($_GET['page']))
          $page = $_GET['page'];

        switch ($page) {
          case 'blogg':
            include('pages/blogg.php');
            break;
          case 'bilder':
            include('pages/bilder.php');
            break;
          case 'kontakt':
            include('pages/kontakt.php');
            break;

          default:
            include('pages/start.php');
        }
      
        ?>

<?php     
        // PUNKT 3    
        if(isset($_SESSION['inLoggad'])){
          //alternativt sida för inloggning
    
        }else{
    ?>

    <form method="post">
       Username: <input type="text" name="username" size="20" />
       Password: <input type="password" name="password" size="20" />
       <input type="submit" value="Submit" name="login"/>
    </form>
    <!-- Här kommer resten av sidan som vanliga besökare ser -->
    <?php } ?>



      </section>
    </main><!-- End main -->

    <footer>
      <?php include('inc/footer.php'); ?>
    </footer><!-- End footer -->
  </div><!-- End wrapper -->


  <a href="Html-mall/index.php">HtmlMall</a>
</body>

</html>