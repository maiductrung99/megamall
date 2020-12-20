<?php
<<<<<<< HEAD
require_once('../../controllers/UserController.php');
$userControl = new UserController();
=======
require_once('../../controllers/CustomerController.php');
$userControl = new CustomerController();
>>>>>>> 7516af23d27b6ad5c9bdc7b31cdb19a4747596d6
$login = $userControl->checkLogin();
if ($login) {
	header("Location: ../../index.php");
} else {
	session_start();
	$_SESSION['errors'] = array('Please try another one!');
	header("Location: ../../login.php");
}
?>