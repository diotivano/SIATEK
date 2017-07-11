<?php 


include 'view/LoginUI.php';

$lgn = new LoginUI();

$lgn->aksesFormLogin();

print_r(PDO::getAvailableDrivers()); 

?>

