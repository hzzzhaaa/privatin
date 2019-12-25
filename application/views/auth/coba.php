<html>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'privatin');

function ambil_data($id)
{
    global $conn;

    $data = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");

    return mysqli_fetch_assoc($data);
}

$cek = ambil_data(1);

echo '<script>alert("' . $cek['name']  . '")</script>';

?>

</html>