<?php

//masukan lokasi dan nama file database
$dsn = 'mysql:dbname=shoes_store;host=10.0.0.64';
$user = 'admin';
$password = 'Admin12345_';


//tes menghubungkan ke database
try {
    
    //melihat dan menghadle pesan eror lalu di lempar ke PDO_Exeption
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //kita bolehkan beberapa query berjalan dalam satu waktu
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
    //echo 'Alhamdulillah Lancar lancar ';
    }
    
    catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
    }

?>
