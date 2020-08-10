<?php
 
include('../koneksi.php');
 
$id_karyawan            = $_POST['id_karyawan'];
$nama                   = $_POST['nama'];
$tgl_lahir              = $_POST['tgl_lahir'];
$jenis_kelamin          = $_POST['jenis_kelamin'];
$no_hp                  = $_POST['no_hp'];
$jabatan                = $_POST['jabatan'];
$alamat                 = $_POST['alamat'];
$email                  = $_POST['email'];
 
    $sql = "UPDATE tbl_karyawan set nama='$nama',tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin',no_hp = '$no_hp',jabatan ='$jabatan',alamat = '$alamat',email = '$email' WHERE id_karyawan='$id_karyawan' ";
 
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