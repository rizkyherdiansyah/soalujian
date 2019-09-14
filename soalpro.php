<?php
echo "<fieldset>";
echo "<center><h1>Koys BOOK's CENTER</center></h1>";
if (isset($_POST['input'])){
    $nama =$_POST['nama'];
    $alamat =$_POST['alamat'];
    $jk =$_POST['jk'];
    $tanggal=$_POST['tanggal'];
    $jumlah =$_POST['jumlah'];
    $kode =$_POST['kode'];
    $jumlah =$_POST['jumlah'];
    $judul =$_POST['judul'];
    $pengarang =$_POST['pengarang'];
    $buku =$_POST['buku'];
    $harga =$_POST['harga'];
    $nomer = 0;

    foreach ($nama as $data => $x) {
        echo "Nama                :   " . $nama[$data] ."<br>";
        echo "Alamat              :   " . $alamat[$data] ."<br>";
        echo "Jenis Kelamin       :   " . $jk[$data] ."<br>";
        echo "Tanggal Pembelian   :   " . $tanggal[$data] ."<br>";
    }

    echo "<hr>";
    echo "<h3>Daftar Buku Yang Dibeli</h3>";
    foreach ($judul as $key => $value) {
        echo "Judul Buku   : " . $judul[$key] . "<br>";
        echo "Kode Buku    : " . $kode[$key] . "<br>";
        echo "Pengarang    : " . $pengarang[$key] . "<br>";
        echo "Jenis Buku   : " . $buku[$key] . "<br>";
        echo "Harga Buku   : " . $harga[$key] . "<br>";
    echo"<hr>";    
    
    }

    echo "<hr>";
    echo "<h3>Total Pembayaran</h3>";
    for ($i=0; $i < count($harga) ; $i++) { 
        $hasil=$harga[$i]+$hasil;
    }
    echo "<pre>";
    echo "Subtotal         : $hasil <br>";
    if ($judul >= 3) {
        $discon = $hasil * 5 /100;
        $total = $hasil - $discon;
        echo "Diskon (5%)      : $discon <br>";
        echo "Total Pembayaran : $total <br>";
    
    }elseif
        ($judul >= 5){
         $discon2 = $hasil * 10 /100;
         $total2 = $hasil - $discon2;
         echo "Diskon (10%)    : $discon2 <br>";
      

        }else{
        $a = 0;
        echo "Diskon(0%)        : $a <br>";
        echo "Total Pembayaran  : $hasil <br> ";
    }
    echo "</pre>";
          
  

    }
    echo "<fieldset>";
    ?>