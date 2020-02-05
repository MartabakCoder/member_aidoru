<?php
    require 'funct.php';
    if(isset($_POST['submit'])){
        if (tambah($_POST)>0){
            echo "<script>
            alert('Data Berhasil ditambah');
            </script>";
            header('Location:index.php');
        }
        else{
            echo "<script>
            alert('Data Gagal ditambah');
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1>INPUT MEMBER AIDORU</h1>
  <form action="" method="post">
  Nama <input type="text" name="nama_member" id="nama_member"><br>
  Tempat,Tanggal Lahir <input type="text" name="tempat_lahir" id="tempat_lahir"> <input type="date" name="tanggal_lahir" id="tanggal_lahir"><br>
  Generasi <input type="number" name="generasi" id="generasi"><br>
  Group Idol <input type="text" name="grup_idol" id="grup_idol"><br>
  <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>
