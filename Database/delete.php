<?php
include "db.php"; 
if(isset($_GET['id_Mahasiswa']))
{
$id_Mahasiswa=$_GET['id_Mahasiswa']; 
$q=mysqli_query($con, "delete from 'Mahasiswa' where id_Mahasiswa = $id_Mahasiswa"); 
if($q)
echo "success"; 
else
echo "error"; 
}
?>