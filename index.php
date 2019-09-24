<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id DESC");
?>

<html>
<head>    
    <title>Kelola Data Barang</title>

<style>

.header {
    background-color: black;
    color: white;
    text-align: center;
    height: 70px; 
    padding: 1px;  
    font-size: 15px;
}

.float{
    padding: 10px;
}

.badan {
    float: right;
    padding: 10px;
    background-color: #90EE90;  
    border-radius: 10px;
}

</style>

</head>

<body>

<div class="header">
    <h1>KELOLA DATA BARANG</h1>
</div>


<div class="float">
    <h3>Data Barang</h3>
        <div class="badan">
            <a href="add.php">Add New User</a><br/><br/>
        </div>
</div>

    <table width='80%' border=1>

    <tr>
        <th>Kode</th> <th>Nama</th> <th>Harga</th> <th>Aksi</th>
    </tr>
    <?php  
    while($barang_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$barang_data['kode']."</td>";
        echo "<td>".$barang_data['nama']."</td>";
        echo "<td>".$barang_data['harga']."</td>";    
        echo "<td><a href='edit.php?id=$barang_data[id]'>Edit</a> | <a href='hapus.php?id=$barang_data[id]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>

</body>
</html>