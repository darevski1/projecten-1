<?php 

    require 'inc/process.php';
	$query = "SELECT * from shout ORDER BY id desc";
	$results = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8" />
  		<title>SHOUT IT!</title>
		<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
	</head>
	<body>
		<div id="container">
			<header>
				<h1>SHOUT IT! Shoutbox</h1>
			</header>
			<div id="shouts">
				<ul>
                    <?php  while ($row = mysqli_fetch_assoc($results)) { ?>
					    <li class="shout"><span><?php echo $row['time'] ?> -</span><strong><?php echo $row['user'] ?></strong>: <?php echo $row['message'] ?> </li>
                    <?php }?>
				</ul>
			</div>
			<?php if(isset($_GET['error'])) : ?>
				<div class="error">
					<?php echo $_GET['error'];?>
				</div>
			<?php endif; ?>
			<div id="input">


				<form method="post" action="insert.php">
					<input type="text" name="user" placeholder="Enter Your Name" />
					<input type="text" name="message" placeholder="Enter A Message" />
					<br />
					<input class="shout-btn" type="submit" name="submit" value="Shout It Out" />
				</form>
			</div>
		</div>
	</body>
</html>