<?php
// PUNKT 1
session_start();
// PUNKT 2    
?>

<!doctype html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title>Länka in sidor med PHP</title>
	<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<header>
      		<h1>Webbserverprogrammering 1 med Bygren</h1>
      	</header>
		<!-- header -->

		<section id="leftColumn">
			<nav>
	        	<h1>Innehåll</h1>
				<ul>
					<li><a href="index.php">Hem</a></li>
					<li><a href="index.php?page=blogg">Blogg</a></li>
					<li><a href="index.php?page=bilder">Bilder</a></li>
					<li><a href="index.php?page=Kontakt">Kontakt</a></li>
					<li><a href="inc/signUp.php"> signUp page</a>

					<li><a href="inc/loggOut.php"> logg out</a>

					<?php  
					if(isset($_SESSION['inLoggad'])){
						include('inc/hiddenLogg.php');
					}
					?>

					

				</ul>
	        </nav>
			<aside>
				<h1>Namn</h1>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Nulla tristique elementum nisl, et vehicula neque laoreet ut. 
				Praesent sed ultrices purus.
				</p>
				<a href="/index.php"> ursprung index</a>
		  	</aside>
		</section>
		<!-- End leftColumn -->

		
		<main role="main">

					<?php 
					if(!isset($_SESSION['inLoggad']))
					include ('inc/loggIn.html'); 
					?>

		<!-- <form method="post">    gammal kod
       Username: <input type="text" name="username" size="20" />
       Password: <input type="password" name="password" size="20" />
       <input type="submit" value="Submit" name="login"/>
    </form> -->
			
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
          case 'Kontakt':
            include('pages/Kontakt.php');
            break;
			case 'klotterplanket':
				include('pages/klotterplanket.php');
				break;

          default:
            include('pages/start.php');
        }
		?>



		<section>


		<?php 
		if( isset($_SESSION['inLoggad'])){
			echo("You are logged in as " . $_SESSION['user']);
		}
		?>
			<hgroup>
				<h1>Välkommen till Webbserverprogrammering 1</h1>
				<h2>Moment 3</h2>
			</hgroup>

			<p>Min sida</p>     
	  	</section>
		</main>
		<!-- End main -->
		<footer>
        	<span id="footerLeft">© Sidlayoutarna</span>
			<span id="footerRight"><a href="mailto:xxx@doman">xxx@doman</a></span>
      </footer>
		<!-- End footer -->
	</div>
	<!-- End wrapper -->
</body>
</html>

