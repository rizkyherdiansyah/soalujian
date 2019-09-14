<html>
<head><title>Ujian Harian</title></head>
<body>
<FORM ACTION="" METHOD="GET" NAME="input">
<fieldset>
<h1><center>Koys BOOK's CENTER</center></h1>
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" required></td>
</tr>
<td>Alamat</td>
<td><textarea name ="alamat" cols="40" rows="5" checked></textarea></td>
</tr>
<tr>
<td><input type="radio" name="jk" value="Laki-Laki" checked>Laki-Laki</td>
<td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
</tr>
<tr>
<td>Tanggal Beli</td>
<td><input type="date" name="tanggal" required></td>
</tr>
<td>Jumlah Pembelian Buku</td>
<td><input type="number" min="1" name="jumlah"required></td>
</tr>
</table>
<input type="submit" name="input" value="Simpan">
<input type ="reset" value"Reset">
<hr>
</form>

<FORM ACTION="soalpro.php" METHOD="POST" NAME="input">
<?php


    if (isset($_GET['input'])) {
    $jlm = $_GET['jumlah'];
    for ($i=0; $i < $jlm ;  $i++) { ?> 
        <table>
        <tr>
    

      <td><label for=>Judul Buku</label></td>
      <td><input type="text" name="judul[]" required><br></td> 
      <td><label for=>Kode Buku</label></td>
      <td><input type="text" name="kode[]" required></td>
      </tr>
      <tr>
      <td><label for=>Pengarang</label></td>
      <td><input type="text" name="pengarang[]" required></td>
      </tr>
      <tr>
      <td><label for=>Jenis Buku</label></td>
      <td><select name ="buku[]" id="">
            <option value="Novel">Novel</option>
            <option value="Fiksi">Fiksi</option>
            <option value="Horror">Horror</option>
            <option value="Cergam">Cerita Bergambar</option>
            <option value="Komik">Komik</option>
            </select>

     </tr>
     <tr>
     <td><label for=>Harga Buku</label></td>
     <td><input type="number" name="harga[]" required></td>
     </tr>
     </table>
     <br>
 <?php } ?>

     <input type ="submit" name="input" value="Simpan">
     <input type ="reset" value"Reset">
     </form>
<?php } ?>

</fieldset>
</body>
</html>