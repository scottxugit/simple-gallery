<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>gallery</title>

		<style>
			body {

				background-color: #000;
				font-size: 13px;
			}

		</style>
		<style type="text/css">
			.underlinemenu {
				font-weight: bold;
				width: 100%;
				font-size: 14px;
			}

			.underlinemenu ul {
				padding: 6px 0 7px 0; /*6px should equal top padding of "ul li a" below, 7px should equal bottom padding + bottom border of "ul li a" below*/
				margin: 0;
				text-align: right;//set value to "left", "center", or "right"*/
			}

			.underlinemenu ul li {
				display: inline;
			}

			.underlinemenu ul li a {
				color: #494949;
				padding: 6px 3px 4px 3px; /*top padding is 6px, bottom padding is 4px*/
				margin-right: 20px; /*spacing between each menu link*/
				text-decoration: none;
				border-bottom: 3px solid gray; /*bottom border is 3px*/
			}

			.underlinemenu ul li a:hover, .underlinemenu ul li a.selected {
				border-bottom-color: black;
			}

		</style>

		<link rel="stylesheet" href="css/reset.css" media="all"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css" media="all"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="libs/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
	</head>

	<body>
		<table width="800" border="0" cellspacing="0" cellpadding="0" align="center" style="boxshadow:0px 5px 5px; border:1px solid #ccc; background-color:#FFF;">
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>
				<div class="underlinemenu">
					<ul>
						<li>
							<a href="index.php">HOME</a>
						</li>
						<li>
							<a href="#">SOBRE</a>
						</li>
						<li>
							<a href="#">EMPRESA</a>
						</li>
						<li>
							<a href="#">CONTATO</a>
						</li>

					</ul>
				</div></td>
			</tr>
			<tr>
				<td>
				<section class="main">
					<div class="container">
						<header class="main-header">
							<img style="display:none;" class="spinner" src="loader.gif" alt="loader"/>
							<a class="next btn btn-default" href="#">Load more</a>
						</header>
						<div class="gallery"></div>
					</div>
				</section><script src="http://code.jquery.com/jquery-1.11.0.min.js"></script><script type="text/javascript" src="libs/fancybox/source/jquery.fancybox.js"></script><script src="js/app.js"></script></td>
			</tr>
			<tr>
				<td style="text-align:center; font-size:12px;">Empreso xyz - enderceo xxxxxx - 2014
				<br />
				todos os direitos reservados</td>
			</tr>
		</table>
	</body>
</html>
