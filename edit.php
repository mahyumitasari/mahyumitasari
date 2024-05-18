<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan
dikirim melalui link (get) -->
<?php
$nim=$_GET['nim'];
//membuat sql tampil data
 $sqldata="SELECT * FROM tblmhsw WHERE nim='$nim'";
 //ambil koneksi data
 require_once "KoneksiDB.php";
 //proses sql
$query=mysqli_query($koneksi,$sqldata);
 //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1.
 $data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
 ?>
 <h2>Update Data Mahasiswa</h2>
<!-- tag form -->
 <form action="Update.php" method="POST">
 <label>Nomor Induk Mahasiswa :</label>
<input type="text" name="nim" value="<?=$data['nim']?>"
placeholder="Nomor Induk Mahasiswa" required>
<br>
<label>Nama Mahasiswa :</label>
 <input type="text" name="nama" id="nama" value="<?=$data['name']?>"
placeholder="Nama Lengkap" required>
 <br>
23. <label for="">Alamat :</label>
24. <input type="text" name="alamat" id="alamat"
value="<?=$data['address']?>" placeholder="Alamat Lengkap" required>
<br>
23. <label for="">Alamat :</label>
24. <input type="text" name="alamat" id="alamat"
value="<?=$data['address']?>" placeholder="Alamat Lengkap" required>
25. <br>
26. <label for="">Program Studi :</label>
27. <select name="prodi" id="prodi">
28. <option value="<?=$data['prodi']?>"
selected><?=$data['prodi']?></option>
29. <option value="Sistem Informasi">Sistem Informasi</option>
30. <option value="Sistem Komputer">Sistem Komputer</option>
31. <option value="Teknik Informatika">Teknik Infomatika</option>
32. </select>
33. <br>
34. <label for="">Umur :</label>
35. <input type="number" name="umur" id="umur" value="<?=$data['age']?>"
required>
36. <br>
37. <button type="submit" name="kirim" value="kirim">Update Data</button>
38. </form>