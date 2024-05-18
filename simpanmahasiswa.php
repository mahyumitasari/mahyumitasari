<?php
include "DB.php";
//buat sql
$sql="INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jkl`, `agama`, `email`, `pwd`, `created_at`, `updated_at`) VALUES ('123458', 'Ade Agustina', 'Kisaran', 'WANITA', 'islam', 'adeagustina265@gmail.com', '123456', current_timestamp(), '2024-04-22 05:10:17.000000')";
//proses sql ke database
$q=mysqli_query($koneksi,$sql)or die('SQL Error');
if($q){
    echo "Data berhasil disimpan";
}else{
    echo "Gagal penyimpanan data!";
}
?>
