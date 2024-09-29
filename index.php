<?php include('server/connection.php'); ?>
<?php include('login.php');?>
<!DOCTYPE html>
<html>
<head>
	<?php include('templates/head.php'); ?>
	<script src="bootstrap4/jquery/sweetalert.min.js"></script>
</head>
<body>
	<div class="text-center border border-dark">
		<div class="main">
			<img class="img-fluid" width="300px" height="300px" style="border-radius: 8px" src="images/postitle.png"/>
  			<?php include('error.php');?>
		</div>
		<div class="fixed-bottom mb-2">
			<div class="d-inline">
				<button type="button" id="admin" class="btn-lg btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-user-tie"></i> Administrator</button>
			</div>
			<div class="d-inline">
				<button type="button" id="user" class="btn-lg btn-secondary" data-toggle="modal" data-target="#modal-user"><i class="fas fa-user"></i> Employee</button>
			</div>
		</div>
	</div>
	<script src="bootstrap4/jquery/jquery.min.js"></script>
	<script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
	<?php include('modals/admin_login_modal.php');?>
	<?php include('modals/employee_login_modal.php');?>
</body>
<style>
body {
  background-image: url('images/pos_bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</html>
