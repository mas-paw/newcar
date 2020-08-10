<?php
 
include('../koneksi.php');
$id         = $_POST['id_karyawan'];
$nama       = $_POST['nama'];
$tgl        = $_POST['tgl_lahir'];
$jk         = $_POST['jenis_kelamin'];
$no_hp      = $_POST['no_hp'];
$jabatan    = $_POST['jabatan'];
$alamat     = $_POST['alamat'];
$email      = $_POST['email'];

 
    $sql ="ALTER TABLE tbl_karyawan AUTO_INCREMENT =0";
    $queryai = mysqli_query($conn,$sql);
    $sqlCheck = "SELECT COUNT(*) FROM tbl_karyawan WHERE id_karyawan='$id' AND nama='$nama'";
    $queryCheck = mysqli_query($conn,$sqlCheck);
    $hasilCheck = mysqli_fetch_array($queryCheck);
    if($hasilCheck[0] == 0){
        $sql = "INSERT INTO tbl_karyawan (id_karyawan,nama,tgl_lahir,jenis_kelamin,no_hp,jabatan,alamat,email) VALUES(NULL,'$nama','$tgl','$jk','$no_hp','$jabatan','$alamat','$email')";
 
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