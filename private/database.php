<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $dbhost = "batecjcosgwp.mysql.db";
    $dbname = "batecjcosgwp";
    $dbuser = "batecjcosgwp";
    $dbpassword = "kEJ56j2HF";
   
    // on se connecte avec les access
    $dbh = new PDO(
        "mysql:host=" . $dbhost . ";dbname=" . $dbname,
        $dbuser,
        $dbpassword
    );
    
?>
