<?php include'includes/header.php';?>
	

	<div>

		<form action="includes/login.inc.php" method="post" onsubmit="return validate();">
			<div class="form-header">
				LOGIN
			</div>
			<br><span style="padding: 10px;">USERNAME</span><input type="text" name="u_id" class="input" id="u_id">
			<br><span style="padding: 10px;">PASSWORD</span><input type="password" name="pwd" class="input" id="pwd">
			<input type="submit" name="submit">
			<div id="error">ERROR IN USERNAME OR PASSWORD</div>
		</form>

	</div>

	<script type="text/javascript">
		function validate(){
			var flag=true;
			var u_id=document.querySelector("#u_id");
			var pwd=document.querySelector("#pwd");
			if(!(/[a-zA-Z]+/.test(u_id.value)))
				flag=false;
			if(!(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(pwd.value)))
				flag=false;
			if(!flag)
			{
				document.querySelector("#error").style.display="block";
			}
			else
			{
				document.querySelector("#error").style.display="none";
			}
			return flag;
		}
	</script>


<?php include'includes/sidebar.php';?>

<?php include'includes/footer.php';?>