<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$birthday=$_POST['birthday'];
		$phone=$_POST['phone'];
		$aphone=$_POST['aphone'];
		$taluka=$_POST['taluka'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		$aadhaar=$_POST['aadhaar'];
		$address=$_POST['address'];


		// $city=$_POST['city'];
		$sql = "INSERT INTO `crud`( `name`, `email`,`phone`, 'aphone', 'gender', 'birthday', 'taluka', 'district', 'state', 'aadhaar', 'address') 
		VALUES ('$name','$email','$phone', '$aphone', '$gender', '$birthday', '$taluka', '$district', '$state', '$aadhaar', '$address')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$birthday=$_POST['birthday'];
		$phone=$_POST['phone'];
		$aphone=$_POST['aphone'];
		$taluka=$_POST['taluka'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		$aadhaar=$_POST['aadhaar'];
		$address=$_POST['address'];

$sql = "UPDATE `crud` SET `name`='$name',`email`='$email',`phone`='$phone',`aphone`='$aphone','gender'='$gender', 'birthday'='$birthday', 'taluka'='$taluka','district'='$district', 'state'='$state', 'aadhaar'='$aadhaar','address'='$address' WHERE id=$id";
								   
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `crud` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM crud WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>