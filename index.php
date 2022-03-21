<?php 
    require ('functions.php');

    if(mysqli_affected_rows($koneksi)){
        echo"
            <script>
                alert('pesan anda tersampaikan :D')
            </script>
            ";
    } else {
        echo"
            <script>
                alert('pesan anda tidak tersampaikan :(')
            </script>
        ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
    <style>
        a{
            padding: 10px;
            background: #000;
            width: 3pc;
            height: 1.5pc;
            color: white;
            text-decoration: none;
            font-family: arial;
            font-weight: bold;
        }
    </style>
<body>
    <div class="container">
        <a href="laporanexcel.php" class="excel" target="_blank">cetak</a>
        <div class="kotak">
                <h1>Katakan sesuatu kepada Joan</h1>
            <div class="kirim">
                <form action="" method="post">
                    <ul>
                        <li style="list-style: none;">
                            <input type="text" name="pesan" placeholder="ketik sesuatu">
                        </li>
                        <li style="list-style: none;">
                            <button name="submit" type="submit">kirim</button>
                        </li>
                        <li style="list-style: none;">
                            <button>cetak</button>
                        </li>
                    </ul>
                </form> 
            </div>
            <p>hehehe tengkyu!!!</p>
        </div>
    </div>
</body>
</html> 