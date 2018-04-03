<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Pemrograman Web Berbasis Framework</title>

		<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			::selection {
				background-color: #E13300;
				color: white;
			}

			::-moz-selection {
				background-color: #E13300;
				color: white;
			}

			body {
				background-color: #fff;
				margin: 40px;
				font: 13px/20px normal Helvetica, Arial, sans-serif;
				color: #4F5155;
			}

			a {
				color: #003399;
				background-color: transparent;
				font-weight: normal;
			}

			h1 {
				color: #444;
				background-color: transparent;
				border-bottom: 1px solid #D0D0D0;
				font-size: 19px;
				font-weight: normal;
				margin: 0 0 14px 0;
				padding: 14px 15px 10px 15px;
			}

			code {
				font-family: Consolas, Monaco, Courier New, Courier, monospace;
				font-size: 12px;
				background-color: #f9f9f9;
				border: 1px solid #D0D0D0;
				color: #002166;
				display: block;
				margin: 14px 0 14px 0;
				padding: 12px 10px 12px 10px;
			}

			#body {
				margin: 0 15px 0 15px;
			}

			p.footer {
				text-align: right;
				font-size: 11px;
				border-top: 1px solid #D0D0D0;
				line-height: 32px;
				padding: 0 10px 0 10px;
				margin: 20px 0 0 0;
			}

			#container {
				margin: 10px;
				border: 1px solid #D0D0D0;
				box-shadow: 0 0 8px #D0D0D0;
			}

		</style>
	</head>

	<body>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Web Framework</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
							<li>
								<a href="<?php echo site_url('Welcome/index');?>">Beranda</a>
							</li>
							<li>
								<a href="<?php echo site_url('Welcome/about')?>">Tentang Saya</a>
							</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Submenu 1</a>
								</li>
								<li>
									<a href="#">Submenu 2</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="jumbotron">
				<h1>About</h1>
				<p>
					NIM		: 1641720046<br><br>
					Nama	: Adinda Dwi Larasati<br><br>
					Gender	: Perempuan<br><br>
					Hobi	: Membaca<br><br>
				</p>
			</div>
		</div>

		<script src="<? echo base_url('assets/js/jquery-js.js') ?>"></script>
		<script src="<? echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	</body>

	</html>

	<!--div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div-->
