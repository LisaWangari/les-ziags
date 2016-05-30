<?php

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'lesziagsdb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();

function generateRandId($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function calculatePrice($nbNights, $dateStart, $idRoom, $board) {
    $dateMonth = date("m",strtotime($dateStart));
    if ($dateMonth>4 or $dateMonth<11) {
        $price = intval("SELECT `room_highpricing` FROM `room` WHERE `room_idroom` = '$idRoom'");
        if ($board == 1) {
            $price += 15;
        }
        $price *= $nbNights;
        return $price;

    } else {
        $price = intval("SELECT `room_lowpricing` FROM `room` WHERE `room_idroom` = '$idRoom'");
        if ($board == 1) {
            $price += 15;
        }
        $price *= $nbNights;
        return $price;
    }
}

function calculateNbNights($start, $end) {
    $ts1 = strtotime($start);
    $ts2 = strtotime($end);
    $seconds_diff = $ts2 - $ts1;
    $day_diff = $seconds_diff/(60*60*24);
    return $day_diff;
}

function checkDates ($room,$dateStart,$dateEnd){
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = $room AND b.booking_datestart < $dateEnd AND b.booking_canceled = '0' ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = $room AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return TRUE;}else {return FALSE;}
}

function checkRoomAvailable($dateStart,$dateEnd) { //renvoie la liste des chambres libres(room_roomnbr) pour les dates données
        if (checkDates(1, $dateStart, $dateEnd)) { $roomList[] = 1; }
        if (checkDates(2, $dateStart, $dateEnd)) { $roomList[] = 2; }
        if (checkDates(3, $dateStart, $dateEnd)) { $roomList[] = 3; }
        if (checkDates(4, $dateStart, $dateEnd)) { $roomList[] = 4; }
        if (checkDates(5, $dateStart, $dateEnd)) { $roomList[] = 5; }
        if (checkDates(6, $dateStart, $dateEnd)) { $roomList[] = 6; }
        if (checkDates(7, $dateStart, $dateEnd)) { $roomList[] = 7; }
        if (checkDates(8, $dateStart, $dateEnd)) { $roomList[] = 8; }
        if (checkDates(9, $dateStart, $dateEnd)) { $roomList[] = 9; }
        if (checkDates(10, $dateStart, $dateEnd)) { $roomList[] = 10; }
        if (checkDates(11, $dateStart, $dateEnd)) { $roomList[] = 11; }
        if (checkDates(12, $dateStart, $dateEnd)) { $roomList[] = 12; }
        if (empty($roomList)){$roomList[] = 0;}
        return $roomList;
}

