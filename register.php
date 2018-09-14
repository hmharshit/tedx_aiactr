<?php
require_once('connect.php');
echo '<pre>'; print_r($_POST); echo '</pre>';
// echo implode(",", $_POST['nomination']['category_list']);
if(isset($_POST) & !empty($_POST)) {

}

$yrls = array();

for ($i=0; $i < sizeof($_POST['nomination']['category_list']) ; $i++) { 
	// $yrls[]=$_POST['nomination']['category_list'][$i]['url']
}
echo implode(",", $yrls);
?>
