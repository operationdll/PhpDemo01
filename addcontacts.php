<?php
  $user = 'root';
  $passwd = '@llc0m';
  $db = 'rfw';
  $mysqli = new mysqli('localhost',$user,$passwd,$db);
  //get project types
  if($mysqli){
	$cname = $_POST['cname'];
    $cdetail = $_POST['cdetail'];
    $ccontent = $_POST['ccontent'];
	$query = "INSERT INTO contactUs(con_name,con_detail,con_content)".
			 "VALUES('".$cname."','".$cdetail."','".$ccontent."')";
    $result = $mysqli->query($query);
	echo $result;
  }
  $mysqli->close();
?>