<html>
<head>
    <title>Add a student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div style="width:400px; margin-top:10%; margin-right:auto; margin-left:auto; border:1px solid #000;">
    <form action="Tambah.php" method="post" align="center">
        <h1>Form Tambah Berita</h1>
        <hr>
        <p>
            ID :
            <input type="text" name="id"/>
        </p>
        <p>
            Judul :
            <input type="text" name="judul"/>
        </p>
        <p>
            Link Berita :
            <input type="text" name="link"/>
        </p>
        
        <p>
            <input type="submit" name="submit" value="submit"/>
            </form>


    <?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$link = $_POST['link'];
        

		// include database connection file
		include("config.php");

		// Insert user data into table
		$sql = "INSERT INTO berita(id,judul,link) VALUES ('$id', '$judul', '$link')";
        $query = mysqli_query($db, $sql);

		// Show message when user added
		echo "User added successfully. <a href='index.php'>Kembali ke Awal</a>";
	}
	?>
    </div>
</body>
</html>
