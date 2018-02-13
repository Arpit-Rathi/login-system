<?php
session_start();
include_once 'dbh.php';
if(isset($_POST['submit']))
{
	$uid=mysqli_real_escape_string($con,$_POST['u_id']);
	$pwd=mysqli_real_escape_string($con,$_POST['pwd']);
	$sql="SELECT * FROM users WHERE u_id='$uid'";
	echo $sql."\n";
	$result=mysqli_query($con,$sql);
	$resultCheck=mysqli_num_rows($result);
		if($resultCheck<1){
			header("Location: ../index.php?login=no_user_found");
			exit();
		}
		else{
			$row=mysqli_fetch_assoc($result);
			if($pwd==$row['pwd']){
				$_SESSION['u_id']=$row['u_id'];
				$_SESSION['type']=$row['type'];
				if($row['type']==0)
					$acc="student";
				else
					$acc="faculty";
				header("Location: ../".$acc.".php?login=success");
				exit();
			}
			else{
				header("Location: ../index.php?login=wrong_password");
				exit();
			}
		}
}
else
{
	header("Location: ../index.php?login=error");
	exit();
}
?>