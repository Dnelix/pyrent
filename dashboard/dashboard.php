<?php
	$page = isset($_GET['v']) ? $_GET['v'] : '';
	if (strcasecmp($page, 'logout') === 0) {
		echo '<script type="text/javascript">window.location.href="inc/parse/logout.php";</script>';
		exit();
	}
?>

<?php include('inc/head.php'); ?>
		
		<?php include('inc/sidebar.php'); ?>
		
	<?php
		if (file_exists('pages/' .$page . '.php')) {
			include('pages/' .$page . '.php');
		} else {
			include('pages/dashboard.php');
		}
    ?>
				
<?php include('inc/foot.php'); ?>