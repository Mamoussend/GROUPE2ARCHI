<?php
	require_once 'controler/Controler.php';

	$controller = new Controler();

	if (!isset($_GET['action']))
	{
		$controller-> showAcceuil();
	}
    ?>