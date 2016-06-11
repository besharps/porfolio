<?php 

 session_start();

//include "smartphone/index.php";


 include "app/config.php";
 include "app/detect.php";

 if(isset($_SESSION['error'])){

 	$page_name="index.php";
 }



 if ($page_name=='') {
 	include $browser_t.'/index.php';
 	}
 elseif ($page_name=='index.php') {

 	include $browser_t.'/index.php';
 	}

?>