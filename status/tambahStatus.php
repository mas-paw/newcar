<?php
 
include('../koneksi.php');

$nama       = $_POST['nama'];
$image      = $_POST['image'];
$no_hp      = $_POST['no_hp'];
$no_ktp     = $_POST['no_ktp'];
$mobil         = $_POST['nama_mobil'];
$sewa       = $_POST['tgl_sewa'];
$lama      = $_POST['lama_hari'];
$supir     = $_POST['supir'];
$total       = $_POST['total_harga'];

 
    $sql ="ALTER TABLE tbl_status AUTO_INCREMENT =0";
    $queryai = mysqli_query($conn,$sql);
        $sql2 = "INSERT INTO tbl_status (no_transaksi,nama,image,no_ktp,no_hp,nama_mobil,tgl_sewa,lama_hari,supir,total_harga) VALUES(NULL,'$nama','$image','$no_ktp','$no_hp','$mobil','$sewa','$lama','$supir','$total')";
 
        $query = mysqli_query($conn,$sql2);
 
        if(mysqli_affected_rows($conn) > 0){
            $data['status'] = true;
            $data['result'] = "Berhasil";
        }else{
            $data['status'] = false;
            $data['result'] = "Gagal";
        }

print_r(json_encode($data));
 
?>