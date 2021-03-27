<?php
include "db.php";
if (isset($_POST['update'])) {
    $id_Mahasiswa = $_POST['id_Mahasiswa'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $q = mysqli_query($con, "UPDATE `Mahasiswa` SET `nim`='$nim',`nama`='$nama',`prodi`='$prodi','email'='$email', 'alamat'='$alamat' where `id_Mahasiswa`='$id_Mahasiswa'");
    if ($q)
        echo "success";
    else
        echo "error";
}
