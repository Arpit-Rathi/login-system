<?php
session_start();
if(isset($_SESSION['u_id']))
{
include'includes/header.php';
?>

<div class="container">
	<h1>HELLO, <?php echo $_SESSION['u_id']?> 
	<ul id="main-nav">
		<li><a href="faculty.php">HOME</a></li>
		<li><a href="#">SCHOOL</a>
			<ul id="inner">
				<li><a href="scope.php">SCOPE</a></li>
				<li><a href="sense.php">SENSE</a></li>
			</ul>
		</li>
		<li><a href="hostels.php">HOSTELS</a></li>
	</ul>
	</h1>
	<br>
	<span><a href="includes/logout.php">LOGOUT</a></span>
	<hr>
	<br><br><br><br><br><br>
	<h2 style="text-align: center;">SCOPE</h2>
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