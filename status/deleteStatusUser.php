<?php
 
include('../koneksi.php');
 
 
    $sql = "TRUNCATE tbl_status_temp ";
 
    $query = mysqli_query($conn,$sql);
 
    $data['status'] = true;
    $data['result'] = 'Berhasil';

 
print_r(json_encode($data));
 
 
?>