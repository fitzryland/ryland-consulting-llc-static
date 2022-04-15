<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Ryland Consulting LLC - Grant Writing</title>
	<meta name="author" content="Fitzhugh Ryland">
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<?php include_once('inserts/ga.php') ?>
</head>
<?php
$url = $_SERVER["REQUEST_URI"];
if (strpos($url, "index") !== false || $url === "/RC/" || $url === "/rc/") {
	$page = 'home';
} elseif (strpos($url, "values") !== false) {
	$page = 'values';
} elseif (strpos($url, "pricing") !== false) {
	$page = 'pricing';
} elseif (strpos($url, "experience") !== false) {
	$page = 'experience';
} elseif (strpos($url, "contact") !== false) {
	$page = 'contact';
} else {
	$page = "home";
};
?>


<body class="<?php echo $page; ?>">
	<div id="headWrap">
		<header>
			<img class="logo" src="images/RClogoDraftTwo_3.gif" width="47" height="180" alt="RClogoDraftTwo 2">
			<h1 class="r"><a href="index.php">Ryland</a></h1>
			<h1 class="c"><a href="index.php">Consulting LLC</a></h1>
			<div class="tagline">
				Your in-house grant</br>writer when you need one.
			</div>
			<nav>   <!-- TODO change the conditions around the current class of the Home page tab -->
				<a class="home <?php if (strpos($url, "index") !== false || $url === "/RC/" || $url === "/rc/" || $url == "/") {echo "current";} ?>" href="index.php">Home</a><a class="values <?php if (strpos($url, "values") !== false) {echo "current";} ?>" href="values.php">Values</a><a class="pricing <?php if (strpos($url, "pricing") !== false) {echo "current";} ?>" href="pricing.php">Pricing</a><a class="experience <?php if (strpos($url, "experience") !== false) {echo "current";} ?>" href="experience.php">Experience</a><a class="contact <?php if (strpos($url, "contact") !== false) {echo "current";} ?>" href="contact.php">Contact</a>
			</nav>
		</header>
	</div><!--#headWrap-->
	<section>
		<div id="secWrap">