<?php
    $host = "localhost"; //host database
    $username = "root"; //username database
    $password = "";
    $db = "profile";
    $koneksi = new mysqli($host,$username,$password,$db); // membuat koneksi ke server sql

    if ($koneksi->connect_error){
        die("koneksi ke database gagal");
    }

    ?>