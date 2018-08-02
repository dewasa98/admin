<html>
<head>
    <title>Tambah Gambar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div style="width:400px; margin-top:10%; margin-right:auto; margin-left:auto; border:1px solid #000;">
        

    <form action="tambah-gambar.php" method="post" enctype="multipart/form-data" align="center">
    <h1>Form Tambah Gambar</h1>
        <hr>
        <p>
            ID Gambar :
            <input type="text" name="id"/>
        </p>
        <p>
            Judul :
            <input type="text" name="judul"/>
        </p>
        <p>
            Deskripsi :
            <input type="text" name="deskripsi"/>
        </p>
        <p>
            Gambar :
            <input type="file" name="gambar">
        </p>
        
        <p>
            <input type="submit" name="submit" value="submit"/>
    </form>
    <?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
        $gambar = $_FILES['gambar']['name'];
	// image file directory
	$target = "images/".basename($gambar);
	if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
		  $msg = "Image uploaded successfully";
	  }

		// include database connection file
		include("config.php");

		// Insert user data into table
		$sql = "INSERT INTO portfolio(id,judul,deskripsi,gambar) VALUES ('$id', '$judul', '$deskripsi','$gambar')";
        $query = mysqli_query($db, $sql);

		// Show message when user added
		echo "Gambar berhasil dimasukkan. <a href='index.php'>Kembali ke Awal</a>";
	}
	?>
    </div>
</body>
</html>
