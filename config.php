<?php
    $page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

    // ini konfigurasi untuk websitenya
    define('PATH','http://localhost:8080/latihan/'); // isi dari path websitenya
    define('SITE_URL',PATH.'index.php');
    define('POSITION_URL',PATH.'?page='.$page);

    // config untuk database websitenya
    define('DB_HOST',''); //nama hostnya ex: localhost/127.0.0.1
    define('DB_USERNAME',''); //nama username untuk hostnya jika xampp root
    define('DB_PASSWORD',''); //password untuk hostnya  default xampp kosong atau ''
    define('DB_NAME',''); //ini untuk nama databasenya contoh databse = test
