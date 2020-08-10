<?php
 
include('../koneksi.php');
 
$id         = $_POST['no_transaksi'];
$nama       = $_POST['nama'];
$image      = $_POST['image'];
$no_hp      = $_POST['no_hp'];
$no_ktp     = $_POST['no_ktp'];
$mobil         = $_POST['nama_mobil'];
$hargamobil = $_POST['harga_mobil'];
$sewa       = $_POST['tgl_sewa'];
$lama      = $_POST['lama_hari'];
$supir     = $_POST['supir'];
$total       = $_POST['total_harga'];
    $sql = "UPDATE tbl_status_temp set nama='$nama',no_hp = '$no_hp',image = '$image',no_ktp = '$no_ktp', nama_mobil = '$mobil', harga_mobil = '$hargamobil', tgl_sewa = '$sewa', lama_hari = '$lama', supir = '$supir',total_harga = '$total' WHERE no_transaksi='$id' ";
 
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