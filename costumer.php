<?php

require 'dbconfig/config.php';
    @$kd_pembeli ="";
    @$nm_pembeli="";
    @$jenis_kelamin="";
    @$alamat="";
    @$kota="";

$query= "SELECT * FROM pembeli";

$hasil = mysqli_query($con ,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Costumerpage</title>
	<link rel="shortcut icon" href="css/gambar/cultures.png">
	<link rel="stylesheet" type="text/css" href="css/style4.css">
</head>
<body>

	 <div class="container">

        <div class="navbar">
        <ul>
            <li><a href="welcome.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li class="active"><a href="#">Customer</a></li>
            <li><a href="transaction.php">Transaction</a></li>
        </ul>
    </div>  

            <div class="tab">
            	<h3>Daftar Costumer</h3>
                <table id="table">
                    <tr>
                        <th>Kode Pembeli</th>
                        <th>Nama Pembeli</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>M.Randy Anugerah</td>
                        <td>Laki-Laki</td>
                        <td>Jl.umm nim 051</td>
                        <td>Banjarmasin</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Wahyuli Dwiki Nanda</td>
                        <td>Laki-Laki</td>
                        <td>Jl.berjaya nim 051</td>
                        <td>Sampit</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Baiq Ismatul Qudsyiah W</td>
                        <td>Perempuan</td>
                        <td>Jl.gajayana nim 034</td>
                        <td>Sampit</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Laofin Aripa</td>
                        <td>Perempuan</td>
                        <td>Jl.Pamungkas nim 050</td>
                        <td>Bontang</td>
                    </tr>
            
                 
               <?php while ($data=mysqli_fetch_array($hasil)) { ?>
                <tr>
                <td> <?php echo $data['kd_pembeli'];?></td>
                <td> <?php echo $data['nm_pembeli'];?></td>
                <td> <?php echo $data['jenis_kelamin'];?></td>
                <td> <?php echo $data['alamat'];?></td>
                <td> <?php echo $data['kota'];?></td>
                
                 </tr>    
       
            <?php } ?>
                </table>
            </div>

            <?php
                if(isset($_POST['search'])){
                    //echo '<script type="text/javascript">alert("Go button Clicked")</script>';
                    
                    $kd_pembeli = $_POST['kd_pembeli'];
                    
                    if($kd_pembeli=="")
                    {
                        echo '<script type="text/javascript">alert("Enter Kode to get Customer details")</script>';
                    }
                    else
                    {
                        $query = "select * from pembeli where kd_pembeli=$kd_pembeli";
                        $query_run = mysqli_query($con,$query);
                        if($query_run)
                        {
                            if(mysqli_num_rows($query_run)>0)
                            {
                                $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
                                @$kd_pembeli =$row['kd_pembeli'];
                                @$nm_pembeli=$row['nm_pembeli'];
                                @$jenis_kelamin=$row['jenis_kelamin'];
                                @$alamat=$row['alamat'];
                                @$kota=$row['kota'];
                            }
                            else{
                                echo '<script type="text/javascript">alert("Invalid Kode")</script>';
                            }
                        }
                        else{
                            echo '<script type="text/javascript">alert("Error in query")</script>';
                        }
                        
                    }
                    
                }
            ?>


            <div class="tab-2">
             <form action="costumer.php" method="post">
                <script src="java/codec.js"></script>
                 <div class="btn">
                    <button name="search" type="submit">Cari Kode...</button>  
                 <div class="pilih">
                    <select name="Pilih">
                        <option value="">Pilih ...</option>
                        <option value="1">Nama Pembeli</option>
                        <option value="2">Jenis Kelamin</option>
                        <option value="3">Alamat</option>
                        <option value="4">Kota</option>
                    </select>
                </div>
                </div>

                Kode :<input type="number" name="kd_pembeli" id="kode" value="<?php echo @$_POST['kd_pembeli'];?>">
                Nama Pembeli :<input type="text" name="nm_pembeli" id="pembeli" value="<?php echo $nm_pembeli;?>">
                Jenis Kelamin :<input type="text" name="jenis_kelamin" id="jenis" value="<?php echo $jenis_kelamin;?>">
                Alamat :<input type="text" name="alamat" id="alamat" value="<?php echo $alamat;?>" >
                Kota :<input type="text" name="kota" id="kota" value="<?php echo $kota;?>">
                
                <button id="btn_insert" name="insert" type="submit" ">Add</button>
                <button id="btn_update" name="update" type="submit" ">Update</button>
                <button id="btn_delete" name="delete" type="submit" ">Delete</button>
            </form>

             <?php
               if (isset($_POST['insert'])) {
                    @$kd_pembeli =$_POST['kd_pembeli'];
                    @$nm_pembeli=$_POST['nm_pembeli'];
                    @$jenis_kelamin=$_POST['jenis_kelamin'];
                    @$alamat=$_POST['alamat'];
                    @$kota=$_POST['kota'];

                    if($kd_pembeli=="" || $nm_pembeli=="" || $jenis_kelamin=="" || $alamat=="" || $kota=="" )
                    {
                        echo '<script type="text/javascript">alert("Insert values in all fields")</script>';
                    }else{
                        $query = "insert into pembeli values($kd_pembeli ,'$nm_pembeli','$jenis_kelamin','$alamat','$kota')";
 
                        $query_run = mysqli_query ($con,$query);
                        if($query_run)
                        {
                            echo '<script type="text/javascript">alert("Values inserted successfully")</script>';
                        }
                        else{
                            echo '<script type="text/javascript">alert("Values Not inserted")</script>';
                        }
                    }

                    }

                    else if(isset($_POST['delete']))
                    {
                        if($_POST['kd_pembeli']=="")
                    {
                        echo '<script type="text/javascript">alert("Enter PID to delete List")</script>';
                    }

                    else{
                        $kd_pembeli = $_POST['kd_pembeli'];
                        $query = "delete from pembeli WHERE kd_pembeli=$kd_pembeli";
                        $query_run = mysqli_query($con,$query);
                        if($query_run)
                        {
                            echo '<script type="text/javascript">alert("List deleted")</script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("Error in query")</script>';
                        }
                    }

                }

                else if(isset($_POST['update']))
                {
                    //echo '<script type="text/javascript">alert("Update Clicked")</script>';
                    if($_POST['kd_pembeli']=="" || $_POST['nm_pembeli']=="" || $_POST['jenis_kelamin']=="" || $_POST['alamat']=="" || $_POST['kota']=="")
                    {
                        echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
                    }
                    else
                    {
                        @$kd_pembeli =$_POST['kd_pembeli'];
                        @$nm_pembeli=$_POST['nm_pembeli'];
                        @$jenis_kelamin=$_POST['jenis_kelamin'];
                        @$alamat=$_POST['alamat'];
                        @$kota=$_POST['kota'];
                            
                        $query = "update barang SET kd_pembeli=$kd_pembeli,nm_pembeli='$nm_pembeli',jenis_kelamin='$jenis_kelamin',alamat='$alamat',kota='$kota' WHERE kd_pembeli=$kd_pembeli";
                            
                        $query_run = mysqli_query($con,$query);
                
                            if($query_run)
                            {
                                echo '<script type="text/javascript">alert("List Updated successfully")</script>';
                            }
                            else{
                                echo '<script type="text/javascript">alert("Error")</script>';
                            }
                        
                    }
                }
               ?>
            </div>
        </div>      

</body>
</html>