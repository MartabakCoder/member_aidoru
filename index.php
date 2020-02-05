<?php
    require 'funct.php';
    $member_aidoru = mysqli_query($conn,"SELECT * FROM member_aidoru");
    if(isset($_POST["hapus"])){
     if(hapus($_POST)>0){
        echo "<script>
            alert('Data Berhasil dihapus');
            </script>";
     }
     else{
        echo "<script>
            alert('Data Gagal dihapus');
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
    <a href="tambah.php">Tambah Data</a>
    <h1>AIDORU MEMBER</h1>
    <table border=1>
    <thead>
    <td>No</td>
    <td>Nama</td>
    <td>Tempat Tanggal Lahir</td>
    <td>Generasi</td>
    <td>Group Idol</td>
    <td>Aksi</td>
    </thead>
    <?php
    $i=1;
    foreach($member_aidoru as $data):
    ?>
    <tbody>
    <td><?= $i?></td>
    <td><?= $data['nama_member']?></td>
    <td><?= $data['tempat_lahir']?>, <?= $data['tanggal_lahir']?></td>
    <td><?= $data['generasi']?></td>
    <td><?= $data['grup_idol']?></td>
    <td><a href="ubah.php?id_member=<?= $data['id_member']?>">Ubah</a>
    <form action="" method="post">
    <input type="hidden" name="id_member" value="<?= $data['id_member']?>">
    <input type="submit" value="hapus" name="hapus">
    </form>
    </td>
    </tbody>
    <?php
    $i++;
    endforeach;?>
    </table>
</body>
</html>