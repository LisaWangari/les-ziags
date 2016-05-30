<?php

function getBookings($idClient){
    $query = "SELECT `booking_idbooking` FROM `booking` WHERE `booking_idclient` = $idClient AND `booking_canceled` /= 0 ";
    $result = mysql_query($query) or die ("no query");

    $result_array = array();
    while($row = mysql_fetch_assoc($result))
    {
        $result_array[] = $row;
    }
}
