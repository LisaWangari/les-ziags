<?php

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'lesziagsdb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

function getBookings($db, $idClient)
{
    $query = "SELECT `booking_idbooking` FROM `booking` WHERE `booking_idclient` = $idClient AND `booking_canceled` = 0 ";
    $result = mysqli_query($db, $query) or die ("no query");

    $result_array = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $result_array[] = $row;
    }
}

function cancelBooking($db,$idBooking)
{

    $sql = "UPDATE `booking` SET `booking_canceled`='1' WHERE `booking_idbooking`= $idBooking";
    mysqli_query($db,$sql);
}