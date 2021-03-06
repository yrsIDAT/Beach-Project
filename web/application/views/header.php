<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/scripts/reset-min.css" />
<link rel="stylesheet" href="/scripts/style.css" />
<script type="text/javascript" src="/scripts/jquery-1.6.2.min.js"></script>
<?php
if (isset($script)) echo '<script type="text/javascript">' . $script . '</script>';

if (isset($mobile)) echo '<link rel="stylesheet" href="/scripts/mobile.css" /><meta name="viewport" content="width=device-width,user-scalable=no" />';
?>
<title><?php echo $title; ?></title>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Beachwall</h1>
			<ul class="menu">
				<li><a href="/beaches/index">Home</a></li>
				<li><a href="/beaches/all">All beaches</a></li>
				<li><a href="/beaches/near">Near me</a></li>
			</ul>
		</div>
		<div class="content">