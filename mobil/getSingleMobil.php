<?php 
include('../koneksi.php'); //jangan lupa untuk include koneksi.php 
$id = $_GET['kode_mobil']; 
$sql = "SELECT * FROM tbl_mobil where kode_mobil = '$id' ";
 
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_object($query)){
        $data['status'] = true;
        $data['result'][] = $row;
 
        // $data2 = respond(true, $row);
    }
}else{
    $data['status'] = false;
    $data['result'][] = "Data Tidak Ditemukan";
}
 
print_r(json_encode($data));
 
 
?>