<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="shortcut icon" href="css/gambar/house.png">
	<link rel="stylesheet" href="css/flipclock.css">
	<link rel="stylesheet" href="css/gretting.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		alert("Mohon Perhatian!");	
		alert("pada page product dan costumer kami menggunakan javascript untuk operasi pada table default nya");	
		alert("untuk tombol add,delete,insert,search menggunakan database phpmyadmin");
		alert("Dan kami Mohon maaf jika banyak kurang nya soalny baru pertama kali main database+html pak");
		alert("TerimaKasih, Semoga nilaii tinggi Aminnnnnnnn");
	</script>
</head>
<body>

	<div class="greeting">
		<script src="java/gretting.js"></script>
	</div>

	<div class="clock">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="java/flipclock.js"></script>
		<script type="text/javascript">
			var clock = $('.clock').FlipClock({
				clockFace: 'TwelveHourClock'
			});
		</script>
	</div>

	<div class="navbar">
		<ul>
			<li class="active"><a href="#">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="costumer.php">Customer</a></li>
			<li><a href="transaction.php">Transaction</a></li>
		</ul>
	</div>		

	<div class="animationarea">
		</div>

</body>
</html>