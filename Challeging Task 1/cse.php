<?php
session_start();
if(isset($_SESSION['u_id']))
{
include'includes/header.php';
?>

<div class="container">
	<h1>HELLO, <?php echo $_SESSION['u_id']?> 
	<ul id="main-nav">
		<li><a href="student.php">HOME</a></li>
		<li><a href="#">DEPARTMENT</a>
			<ul id="inner">
				<li><a href="cse.php">CSE</a></li>
				<li><a href="ece.php">ECE</a></li>
			</ul>
		</li>
		<li><a href="library.php">LIBRARY</a></li>
	</ul>
	</h1>
	<br>
	<span><a href="includes/logout.php">LOGOUT</a></span>
	<hr>
	<br><br><br><br><br><br>
	<h2 style="text-align: center;">CSE</h2>
</div>
	
<?php include'includes/sidebar.php';

include'includes/footer.php';
}
else
{
	header("Location: index.php?home=unauthorized_access");
	exit();
}
?>