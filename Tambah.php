<html>
<head>
    <title>Add a student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="Tambah.php" method="post">
        <p>
            id :
            <input type="text" name="id"/>
        </p>
        <p>
            judul :
            <input type="text" name="judul"/>
        </p>
        <p>
            link :
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

</body>
</html>
