<html>
<head>
    <title>Tambah Barang</title>

<style>

.header {
    background-color: black;
    color: white;
    text-align: center;
    height: 70px; 
    padding: 1px;  
    font-size: 15px;
}

.tombol {
    padding: 10px;
    background-color: #90EE90;  
    border-radius: 10px;
}

.border {
    border-radius: 10px;
}

* {
    box-sizing: border-box;
}

.badan {
    width: 360px;
    background: white;
    height: 50px;
    padding: 50px 40px;
    position: absolute;
    left: 50%;
    top: 45%;
    transform: translate(-50%, -50%);
}

.data {
    text-align: center;
}

</style>

</head>

<body>

<div class="header">
    <h1>KELOLA DATA BARANG</h1>
</div><br><br>

    <a href="index.php" class="tombol">Kembali ke Halaman Utama</a>
    <br/><br/>


    <div class="data">
        <h4>UPDATE DATA BARANG</h4>
    </div>



<div class="badan">
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0" border-radius="10px">
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Berat</td>
                <td><input type="text" name="berat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table> 
    </form>
</div>

    <?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $berat = $_POST['berat'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO barang(kode,nama,deskripsi,stok,harga,berat) VALUES('$kode','$nama','$deskripsi','$stok','$harga','$berat')");

    // Show message when user added
    echo "Barang telah selesai ditambahkan. <a href='index.php'>Lihat Hasil</a>";
}
?>
</body>
</html>