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

	<main class="admin" id="admin" style="margin-top: 20px;">

<div class="container" style="padding-top: 50px; padding-left: 20%;">
<?php
		if (isset($_SESSION['admin_loggedin'])) {
			include 'admin_sidebar_templates.html.php';
		}
		?>



	<?php
		if (isset($_SESSION['admin_loggedin'])) {
      echo $output;
    }
		else {

			include 'login_template.html.php';

		}
	?>
</div>
	</main>

</body>
</html>
