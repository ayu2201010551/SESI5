<?php
    include("konfigurasi.php");


    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbMATKUL";
        $sql = "CREATE TABLE $tbel(
          KodeMk VARCHAR(8) PRIMARY KEY,
          Matakuliah VARCHAR(50),
          SKS INT
        
        )";
        $hasil = mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan tabel " . $tbel . " Sukses";
        } else{
            echo "Pembuatan tabel " . $tbel . " Gagal";
        }
    }else{
        echo "Koneksi ke Mysql Gagal";
   }
    