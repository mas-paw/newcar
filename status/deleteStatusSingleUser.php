<?php
 
include('../koneksi.php');
 
$id = $_POST['no_transaksi'];
 
if(!empty($id)){
    $sql = "DELETE FROM tbl_status_temp WHERE no_transaksi='$id' ";
 
    $query = mysqli_query($conn,$sql);
 
    $data['status'] = true;
    $data['result'] = 'Berhasil';
}else{
    $data['status'] = false;
    $data['result'] = 'Gagal';
}
 
print_r(json_encode($data));
 
 
?>