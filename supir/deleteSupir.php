<?php
 
include('../koneksi.php');
 
$id = $_POST['id_supir'];
 
if(!empty($id)){
    $sql = "DELETE FROM tbl_supir WHERE id_supir='$id' ";
 
    $query = mysqli_query($conn,$sql);
 
    $data['status'] = true;
    $data['result'] = 'Berhasil';
}else{
    $data['status'] = false;
    $data['result'] = 'Gagal';
}
 
print_r(json_encode($data));
 
 
?>