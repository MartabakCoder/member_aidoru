<?php
    $id = $_GET['id_member'];
    require 'funct.php';
    $member_aidoru = mysqli_query($conn,"SELECT * FROM member_aidoru WHERE id_member = '$id' ");
    if(isset($_POST['submit'])){
        if (ubah($_POST)>0){
            echo "<script>
            alert('Data Berhasil diubah');
            </script>";
            header('Location:index.php');
        }
        else{
            echo "<script>
            alert('Data Gagal diubah');
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
    <h1>EDIT MEMBER AIDORU</h1>
    <?php
    foreach($member_aidoru as $data):
    ?>
  <form action="" method="post">
  <input type="hidden" name="id_member" value="<?= $data['id_member']?>">
  Nama <input type="text" name="nama_member" id="nama_member" value="<?= $data['nama_member']?>"><br>
  Tempat,Tanggal Lahir <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $data['tempat_lahir']?>"> <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $data['tanggal_lahir']?>"><br>
  Generasi <input type="number" name="generasi" id="generasi" value="<?= $data['generasi']?>"><br>
  Group Idol <input type="text" name="grup_idol" id="grup_idol" value="<?= $data['grup_idol']?>"><br>
  <input type="submit" value="submit" name="submit">
  </form>
  <?php
    endforeach;?>
</body>
</html>