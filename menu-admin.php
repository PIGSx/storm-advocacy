<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/menu-admin.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body class="dark">
	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admin-dash.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Cliente Fisico</span>
				</a>
			</li>
			<li>
				<a href="clienteJ.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Cliente Juridico</span>
				</a>
			</li>
			<li>
				<a href="adv-admin.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Admins e Advogados</span>
				</a>
			</li>
			<li>
				<a href="index.php">
					<i class='bx bx-news'></i>
					<span class="text">Site</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-line-chart'></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="https://calendly.com/event_types/user/me" target="_blank">
					<i class='bx bx-calendar'></i>
					<span class="text">Agenda</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<?php
				echo	'<a href=logoff.php class=logout>';
				echo	"<i class='bx bx-log-out'></i>";
				echo "<span class=text>Logout</span>";
				echo "</a>";
				?>
			</li>
		</ul>
	</section>
	<section id="content">
		<!-- navbar-->
		<nav>
			<i class='bx bx-menu'></i>
			<i class="uil uil-moon toggle-btn"></i>
		</nav>
	</section>
	<script src="js/menu-admin.js"></script>
	<script src="js/dark.js"></script>
</body>

</html>