<?php
  $user = 'root';
  $passwd = '@llc0m';
  $db = 'rfw';
  $mysqli = new mysqli('localhost',$user,$passwd,$db);
  //get project types
  if($mysqli){
	$name = $_POST['name'];
    $conpn = $_POST['conpn'];
    $condtail = $_POST['condtail'];
    $bcontent = $_POST['bcontent'];
	$typeIds = $_POST['typeIds'];
	$query = "INSERT INTO projectCustomer(cus_webName,cus_contactPer,cus_contactDet,cus_business)".
			 "VALUES('".$name."','".$conpn."','".$condtail."','".$bcontent."')";
    $result = $mysqli->query($query);
	if($result){
		$getID=0;
		$query = 'SELECT max(cus_id) FROM projectCustomer';
		$result = $mysqli->query($query);
		if($result){
			if($result->num_rows>0){
				while($row = $result->fetch_array()){
					$getID=$row[0];
				}
			}
		}
		if($getID!=0){
			$tis = explode(",",$typeIds);
			$bol = true;
			foreach ($tis as $v) {
				$query = "INSERT INTO customerPro(cus_id,typ_id)".
						 "VALUES('".$getID."','".$v."')";
				$result = $mysqli->query($query);
				if(!$result){
					$bol = false;
				}
			}
			echo $result;
		}else{
			echo '';
		}
	}else{
		echo $result;
	}
  }
  $mysqli->close();
?>