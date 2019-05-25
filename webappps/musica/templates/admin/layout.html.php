<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/style.css"/>
		<title><?=$title?></title>
	</head>
	<body>
	<header>
		<section>
			<h1>Multi Matte</h1>

		</section>
	</header>
	<nav>

	</nav>
<img src=""/>
	<main class="admin" id="admin">
		<?php
		if (isset($_SESSION['admin_loggedin'])) {
			include 'admin_sidebar_templates.html.php';
		}
		?>


	<section class="right">


	<?php
		if (isset($_SESSION['admin_loggedin'])) {
      echo $output;
    }
		else {

			include 'login_template.html.php';

		}
	?>

</section>
	</main>

</body>
</html>
