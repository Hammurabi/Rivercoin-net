<?php
$cur1 = "RVC";
$cur2 = "EUR";
$buy = "Buy ".$cur1." with ".$cur2;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Rubik" rel="stylesheet">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../common-content/master.css">
	<link rel="stylesheet" type="text/css" href="custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/master.js"></script>
</head>
<body>
<header class="wrapper noselect">
	<nav>
		<img src="../../common-content/image-content/logofull.png">
		<div class="hamburgermenu" onclick="hamburgerMenu()">
			<div></div>
			<div></div>
			<div></div>
		</div>
		<ul id="menu">
			<li>Why</li>
			<li>How it works</li>
			<li>Our Visions</li>
			<li class="calltoaction">Get it!</li>
		</ul>
	</nav>
</header>
<section class="wrapper topsection secondary-dark exchange">
<h1>Exchange</h1>
<div class="transactioninfo">
	<div>
		<?php
		echo "<p>".$cur1.":</p>";
		?>
	</div>
	<div>
		<p>Data missing</p>
	</div>
	<div>
		<?php echo "<p>".$cur2.":</p>";?>		
	</div>
	<div>
		<p>Data missing</p>
	</div>
	<div>
		<?php echo "<p>Current Fee:</p>";?>		
	</div>
	<div>
		<p>Data missing</p>
	</div>
	<div>
		<?php echo "<p>Next Fee:</p>";?>		
	</div>
	<div>
		<p>Data missing</p>
	</div>
</div>
<div class="toogleswitch">
	<div class="current blue-secondary">Buy</div>
	<div>Sell</div>
</div>
<div class="input">
	<div class="textarea" placeholder="Choose amount" contenteditable="true"></div>
	<div class="choosecurrency">
		<div>
			<?php echo $cur1;?>
		</div>
	</div>
</div>
<div class="arrow">&#x2193;</div>
<div class="input">
	<div class="textarea" placeholder="Fixed price" contenteditable="true"></div>
	<div class="choosecurrency">
		<div>
			<?php echo $cur2;?>
		</div>
	</div>
</div>
<input type="submit" name="" value="<?php echo $buy;?>">
</section>
</body>
</html>