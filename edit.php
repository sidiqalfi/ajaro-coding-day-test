<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE barang SET name='$kode',nama='$nama',harga='$harga' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $kode = $user_data['kode'];
    $nama = $user_data['nama'];
    $harga = $user_data['harga'];
}
?>
<html>
<head>  
    <title>Edit Barang</title>

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

</style>

</head>

<body>

<div class="header">
    <h1>KELOLA DATA BARANG</h1>
</div><br><br>

<div class="tombol">
    <a href="index.php">Home</a>
</div><br><br>

    <form name="update_barang" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="name" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="email" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="mobile" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>