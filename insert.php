<?php
    $conn = new mysqli("172.16.131.125", "z_zxc", "tre", "z_zxc");
    $imie = $_POST['imie'];
    $dzial = $_POST['dzial'];
    $zarobki = $_POST['zarobki'];
    $data = $_POST['data'];
    $sql = "INSERT INTO pracownicy(imie, dzial, zarobki, data_urodzenia) VALUES ('$imie', '$dzial', '$zarobki', '$data')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
?>