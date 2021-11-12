<?php
	   // ctivation du rapport d'erreurs
        ini_set('error_reporting', E_ALL);
		$bdd=null;

       // Configuration du fuseau horaire
        //date_default_timezone_set('Asia/Dubai');

         // Host Name
        $dbhost = 'localhost';

       // Database Name
       $dbname = 'coursdiop';

      // Database Username
         $dbuser = 'root';

     // Database Password
     $dbpass = '';

    // Defining base url
    //define("BASE_URL", "http://fashionys.com/");

    // Getting Admin url
    //define("ADMIN_URL", BASE_URL . "admin" . "/");

    try {
	   $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    }
    catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();

    }
?>
  

