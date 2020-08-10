<?php
    include_once "../koneksi.php";

    $kode_mobil = $_POST['kode_mobil']
    $image = $_FILES['image']['name'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $target = "images/".basename($image);
        
    // sesuiakan ip address laptop/pc atau URL server
    $actualpath = "http://192.168.100.9/newcar/mobil/$target";
   	$sql = "UPDATE tbl_mobil set nama='$nama',harga = '$harga',image = '$actualpath' WHERE kode_mobil='$kode_mobil' ";

    try{
        $result = $conn->query($sql);
        if($result){
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                $data['status'] = true;
                $data['result'] = "Berhasil";
            }else{
                $data['result'] = "Directory Tidak Ditemukan";
            }
        }else{
            $data['result'] = "Database Connect,but,Gagal Menyimpan Data";
        }
        $conn->close();
    }catch(Exception $e){
        $data['result'] = "Gagal Menyimpan Data";
        $conn->close();
    }

print_r(json_encode($data));
?>  