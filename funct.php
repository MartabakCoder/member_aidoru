<?php
require 'connection.php';

function tambah($data)
{
    global $conn;
    $nama_member = $data['nama_member'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $tempat_lahir = $data['tempat_lahir'];
    $generasi = $data['generasi'];
    $grup_idol = $data['grup_idol'];
    $query = "INSERT INTO member_aidoru(nama_member,tanggal_lahir,tempat_lahir,generasi,grup_idol) 
    VALUES ('$nama_member','$tanggal_lahir','$tempat_lahir','$generasi','$grup_idol')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id= $data['id_member'];
    $nama_member = $data['nama_member'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $tempat_lahir = $data['tempat_lahir'];
    $generasi = $data['generasi'];
    $grup_idol = $data['grup_idol'];
    $query = "UPDATE member_aidoru SET nama_member = '$nama_member',tanggal_lahir = '$tanggal_lahir',
    tempat_lahir = '$tempat_lahir',generasi = '$generasi', grup_idol = '$grup_idol' WHERE id_member = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapus($data)
{
    global $conn;
    $id = $data['id_member'];
    $query = "DELETE FROM member_aidoru WHERE id_member = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}