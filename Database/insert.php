<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $prodi=$_POST['prodi'];
 $email=$_POST['email'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"INSERT INTO `Mahasiswa` (`nim`,`nama`,`prodi`, 'email', 'alamat')
 VALUES ('$nim','$nama','$prodi', '$email', '$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>