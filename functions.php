<?php

// koneksi kedatabase
$host = "localhost";
$username = "root";
$password = "";
$database = "cobacrud";

$conn = mysqli_connect($host, $username, $password, $database);

// query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function create($data) {
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "INSERT INTO tabledata VALUES ('', '$nama', '$alamat')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM albums WHERE id = $id");
    return mysqli_affected_rows($conn);

}


?>