<?php 
	require_once('admin/scripts/config.php');
	confirm_logged_in();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create User</title>
</head>
<body>
	<?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>

<h1>You are now registered. Please check your e-mail for your password.</h1>
<h3>Click <a href="index.php">here</a> to sign-in.</h3>
</body>
</html>