<html>
<head>
    <title>Update Berita</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
include("config.php");
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM berita WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
?>
<body>
<div style="width:400px; margin-top:10%; margin-right:auto; margin-left:auto; border:1px solid #000;">
    <form action="Update.php" method="post" align="center">
    <h1>Form Tambah Berita</h1>
        <hr>
        <p>
            ID Berita :
            <input type="text" name="id" value="<?php echo $data['id'] ?>" readonly>
        </p>
        <p>
            Judul :
            <input type="text" name="judul" value="<?php echo $data['judul'] ?>"/>
        </p>
        <p>
            Link Berita:
            <input type="text" name="link" value="<?php echo $data['link'] ?>"/>
        </p>
        <p>
            <input type="submit" name="Update" value="Update"/>
    </form>
    <?php

    include("config.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['Update'])){

    	// ambil data dari formulir
        $id = $_POST['id'];
		$judul = $_POST['judul'];
		$link = $_POST['link'];

    	// buat query update
    	$sql = "UPDATE berita SET id='$id', judul='$judul', link='$link' WHERE id=$id";
    	$query = mysqli_query($db, $sql);

        header("location: index.php");
    }


    ?>
    </div>
</body>
</html>
