<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'bdbusk_rada';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die('Connect failed'. mysqli_connect_error() );
    }
    /*
    else
{   echo "Connect successful" ; }   */