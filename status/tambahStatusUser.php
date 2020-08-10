<?php
 
include('../koneksi.php');
$nama       = $_POST['nama'];
$image      = $_POST['image'];
$no_ktp     = $_POST['no_ktp'];
$no_hp      = $_POST['no_hp'];
$mobil      = $_POST['nama_mobil'];
$hargamobil = $_POST['harga_mobil'];
$sewa       = $_POST['tgl_sewa'];
$lama       = $_POST['lama_hari'];
$supir      = $_POST['supir'];
$total      = $_POST['total_harga'];

$sql ="ALTER TABLE tbl_status_temp AUTO_INCREMENT =0";
$queryai = mysqli_query($conn,$sql);

    $sql = "INSERT INTO tbl_status_temp (no_transaksi,nama,image,no_ktp,no_hp,nama_mobil,harga_mobil,tgl_sewa,lama_hari,supir,total_harga) VALUES(NULL,'$nama','$image','$no_ktp','$no_hp','$mobil','$hargamobil','$sewa','$lama','$supir','$total')";
 
    $query = mysqli_query($conn,$sql);
 
    if(mysqli_affected_rows($conn) > 0){
        $data['status'] = true;
        $data['result'] = 'Berhasil';
    }else{
        $data['status'] = false;
        $data['result'] = 'Gagal';
    }
print_r(json_encode($data));

?>