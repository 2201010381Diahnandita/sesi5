<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $mk = "tbMataKuliah";
        $sql = "CREATE TABLE $mk(
            kodeMK VARCHAR(8) PRIMARY KEY,
            matakuliah VARCHAR(50),
            sks INT
        )";
        $hasil = mysqli_query($cnn, $sql );
        if($hasil){
            echo " Pembuatan tabel " . $mk . " Sukses ";
        }else{
            echo " Pembuatan tabel " . $mk . " Gagal ";
        }
        

    }else{
        echo "Koneksi ke Mysql Gagal";
    }