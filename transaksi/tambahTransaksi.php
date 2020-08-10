<?php
 
include('../koneksi.php');
$id         = $_POST['no_transaksi'];
$nama       = $_POST['nama'];
$no_hp      = $_POST['no_hp'];
$no_ktp     = $_POST['no_ktp'];
$mobil         = $_POST['nama_mobil'];
$sewa       = $_POST['tgl_sewa'];
$lama      = $_POST['lama_hari'];
$supir     = $_POST['supir'];
$denda      = $_POST['denda'];
$total       = $_POST['total_harga'];

 
    $sql ="ALTER TABLE tbl_transaksi AUTO_INCREMENT =0";
    $queryai = mysqli_query($conn,$sql);
    $sql = "INSERT INTO tbl_transaksi (no_transaksi,nama,no_ktp,no_hp,nama_mobil,tgl_sewa,lama_hari,supir,denda,total_harga) VALUES(NULL,'$nama','$no_ktp','$no_hp','$mobil','$sewa','$lama','$supir','$denda','$total')";
 
        $query = mysqli_query($conn,$sql);
 
        if(mysqli_affected_rows($conn) > 0){
            $data['status'] = true;
            $data['result'] = "Berhasil";
        }else{
            $data['status'] = false;
            $data['result'] = "Gagal";
        }
print_r(json_encode($data));
 
 
?>