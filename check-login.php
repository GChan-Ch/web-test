<?php
session_start();
require 'config.php';

if ( isset($_POST['username']) && isset($_POST['password']) ) {
    
    $sql_check = "SELECT nama_petugas, 
                         id_level, 
                         id_petugas 
                  FROM tb_petugas 
                  WHERE 
                       username=? 
                       AND 
                       password=? 
                  LIMIT 1";

    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nama_petugas, $id_level, $id_petugas);

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $id_level;
            $_SESSION['sess_id']    = $id_petugas;
            $_SESSION['nama']       = $nama_petugas;
                    }

        $check_log->close();

        header('location:admin-'.$id_level);
        exit();

    } else {
        header('location: login.php?error='.base64_encode('Username dan Password Invalid!!!'));
        exit();
    }   
	
} else {
    header('location:login.php');
    exit();
}