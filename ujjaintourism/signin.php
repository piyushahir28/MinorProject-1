<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?php include('server.php')?>
	<?php include('errors.php') ?>

	<?php 
	if(!isset($_SESSION[''])) { 
	echo "<script type='text/javascript'>"; 
	echo "alert('User not logged in!')"; 
	echo "</script>"; 
	} 
?> 
</body>
</html>
