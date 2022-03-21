<?php 
    $koneksi = mysqli_connect("localhost", "root", "", "web-joan");
    if(isset($_POST["submit"])){
        global $koneksi;
        $pesan = ($_POST["pesan"]);
        $query = "INSERT INTO pesan
                    VALUES
                ('$pesan')
        ";
        mysqli_query($koneksi, $query);
}
?>