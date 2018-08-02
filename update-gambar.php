<html>
<head>
    <title>Update gambar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
include("config.php");
//ambil id dari query string
// buat query untuk ambil data dari database
$id = $_GET['id'];
$sql = "SELECT * FROM portfolio WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

?>
<body>
<div style="width:400px; margin-top:10%; margin-right:auto; margin-left:auto; border:1px solid #000;">
    <form action="update-gambar.php" method="post" enctype="multipart/form-data" align="center">
    <h1>Form Update Gambar</h1>
        <hr>
        <p>
            ID Gambar :
            <input type="text" name="id" value="<?php echo $data['id'] ?>"/>
        </p>
        <p>
            Judul :
            <input type="text" name="judul" value="<?php echo $data['judul'] ?>"/>
        </p>
        <p>
            Deskripsi :
            <input type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>"/>
        </p>
        <p>
            Gambar:
            <input type="file" name="gambar">
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
		$deskripsi = $_POST['deskripsi'];
        $gambar = $_FILES['gambar']['name'];
	// image file directory
	$target = "images/".basename($gambar);
	if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
	  }

        // buat query update
        
    	$sql = "UPDATE portfolio SET id='$id', judul='$judul', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$id";
    	$query = mysqli_query($db, $sql);
        
        header ("location: index.php");
    }


    ?>
</div>
</body>
</html>
