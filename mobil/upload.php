<?php
    include_once "../koneksi.php";
    
    $image = $_FILES['image']['name'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $target = "images/".basename($image);
        
    // sesuiakan ip address laptop/pc atau URL server
    $actualpath = "http://192.168.100.33/newcar/mobil/$target";
    $sqll ="ALTER TABLE tbl_mobil AUTO_INCREMENT =0";
    $queryai = mysqli_query($conn,$sqll);
    $sql = "INSERT INTO tbl_mobil(kode_mobil,nama,image,harga) values(NULL,'$nama','$actualpath','$harga')";

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