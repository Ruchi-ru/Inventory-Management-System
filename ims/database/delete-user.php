<?php
$data=$_POST;
$user_id=(int) $data['user_id'];
$first_name=$data['f_name'];
$last_name=$data['l_name'];

//adding record 
	try{
		$command ="DELETE FROM users WHERE id=($user_id)";

	include('connection.php');

	$conn->exec($command);
	echo json_encode([
		'success' => true,
		'message' => $first_name.''.$last_name.'successfully deleted from the system.'
	]);
	}catch(PDOException $e){
		echo json_encode([
		'success' => false,
		'message' => 'Error proccesing your request'
	]);
	}
?>