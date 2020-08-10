<?php
 
include('../koneksi.php');
 
$id = $_POST['kode_mobil'];
 
if(!empty($id)){
    $sql = "DELETE FROM tbl_mobil WHERE kode_mobil='$id' ";
 
    $query = mysqli_query($conn,$sql);
 
    $data['status'] = true;
    $data['result'] = 'Berhasil';
}else{
    $data['status'] = false;
    $data['result'] = 'Gagal';
}
 
print_r(json_encode($data));
 
 
?>