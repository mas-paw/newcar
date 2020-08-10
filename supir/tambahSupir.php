<?php
 
include('../koneksi.php');
$id         = $_POST['id_supir'];
$nama       = $_POST['nama'];
$no_hp      = $_POST['no_hp'];
$alamat     = $_POST['alamat'];
$umur       = $_POST['umur'];

 
    $sql ="ALTER TABLE tbl_supir AUTO_INCREMENT =0";
    $queryai = mysqli_query($conn,$sql);
    $sqlCheck = "SELECT COUNT(*) FROM tbl_supir WHERE id_supir='$id' AND nama='$nama'";
    $queryCheck = mysqli_query($conn,$sqlCheck);
    $hasilCheck = mysqli_fetch_array($queryCheck);
    if($hasilCheck[0] == 0){
        $sql = "INSERT INTO tbl_supir (id_supir,nama,umur,no_hp,alamat) VALUES(NULL,'$nama','$umur','$no_hp','$alamat')";
 
        $query = mysqli_query($conn,$sql);
 
        if(mysqli_affected_rows($conn) > 0){
            $data['status'] = true;
            $data['result'] = "Berhasil";
        }else{
            $data['status'] = false;
            $data['result'] = "Gagal";
        }
    }else{
        $data['status'] = false;
        $data['result'] = "Gagal, Data Sudah Ada";
    }
 
     

 
 
print_r(json_encode($data));
 
 
 
 
?>