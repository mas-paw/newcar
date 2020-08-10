<?php
 
include('../koneksi.php');
 
$id         = $_POST['id_supir'];
$nama       = $_POST['nama'];
$no_hp      = $_POST['no_hp'];
$alamat     = $_POST['alamat'];
$umur       = $_POST['umur']; 
    $sql = "UPDATE tbl_supir set nama='$nama',no_hp = '$no_hp',alamat = '$alamat',umur = '$umur' WHERE id_supir='$id' ";
 
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