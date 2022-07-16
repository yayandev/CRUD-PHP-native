<?php
require 'functions.php';
$read = query("SELECT * FROM tabledata");
if(isset($_POST['submit'])) {
    if( create($_POST) > 0) {
        echo "
			<script>
			alert('create success');
			document.location.href = 'index.php';
			</script>";
    }else {
        echo "
			<script>
			alert('create not success');
			document.location.href = 'index.php';
			</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP NATIVE</title>
</head>
<body>
    <h1>belajar crud php native</h1>


    <!-- read -->
    <h2>CREATE</h2>
    <form action="" method="post">
        <label for="nama">NAMA</label>
        <br>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="alamat">ALAMAT</label>
        <br>
        <input type="text" id="alamat" name="alamat">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>


    <h2>READ & DELETE & UPDATE</h2>

    <ul>
        <?php $i = 1; ?>
        <?php foreach($read as $data) : ?>
        <li>No : <?= $i; ?></li>
        <li>Nama : <?= $data['nama']; ?></li>
        <li>Alamat : <?= $data['alamat']; ?></li>
        <li><a href="delete.php?id=<?= $data['id']; ?>">Delete</a></li>
        <li><a href="">Edit</a></li>
        <?php $i++; ?>
        <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>