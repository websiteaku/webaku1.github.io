<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(!empty($_POST['nama']) AND !empty($_POST['pesan'])) {
    $nama = $_POST['nama'];
    if($_POST['email'] != 'http://' OR !empty($_POST['email'])) { $email = $_POST['email']; } else { $email= "#"; }
    $pesan = $_POST['pesan'];
    $tgl = date('D, d M Y - H:i:s');
    $text = stripslashes(htmlspecialchars($pesan));
   
    $l = rand(1,2);

    $fp = fopen("db.html", 'a');
    fwrite($fp, "<div class='list$l'><div class='hr'><div align='right'>$tgl</div></div><img src=''/> <a href='$web'><b>$nama</b></a> : $text </div>");
    fclose($fp);
}

header('location:bukutamu.php');

?>
</body>
</html>