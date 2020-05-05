<?php

require 'dbconfig/config.php';

$query2="SELECT * FROM pembeli AS p INNER JOIN transaksi AS t ON p.kd_pembeli = t.kd_pembeli";

$hasil2 = mysqli_query($con ,$query2);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transactionpage</title>
	<link rel="shortcut icon" href="css/gambar/a.png">
	<link rel="stylesheet" type="text/css" href="css/style5.css">
</head>
<body>

	 <div class="container">

     <div class="navbar">
        <ul>
            <li><a href="welcome.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="costumer.php">Customer</a></li>
            <li class="active"><a href="#">Transaction</a></li>
        </ul>
    </div>
            <div class="tab">
            	<h3>Daftar Transaksi</h3>
                <table id="table">
                    
                 
             <?php while ($data=mysqli_fetch_array($hasil2)) { ?>
                <tr>
                <td> <?php echo $data['kd_trx'];?></td>
                <td> <?php echo $data['tgl_beli'];?></td>
                <td> <?php echo $data['kd_pembeli'];?></td>
                <td> <?php echo $data['kd_brg'];?></td>
                <td>
             </tr>    
            <?php } ?>
                </table>
            </div>

       
    </div>	     
</body>
</html>