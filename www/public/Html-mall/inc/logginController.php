<?php
for ($i = 0; $i < count($personArray); $i++) {
  if ($user == $personArray[$i]->getUserName() && $pwd == $personArray[$i]->getPassWord()) {
    $_SESSION['inLoggad'] = true;
    $_SESSION['username'] = $_POST['username'];
  }
}


//eller


/*
 *
 * if (isset($_POST['password'])) {
  if ($_POST['password'] == '12345' && $_POST['username'] == 'admin') {
    $_SESSION['inLoggad'] = true;
    $_SESSION['username'] = $_POST['username'];
    
  }
}
 */