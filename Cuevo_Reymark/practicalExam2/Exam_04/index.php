<?php

$date1 = '2019-05-31';
$date2 = '2018-04-05';

function dateDifference($d1, $d2) {
    $d1 = date_create($d1);
    $d2 = date_create($d2);
    $diff = date_diff($d1, $d2);
    return $diff->format('%y year(s), %m month(s), %d day(s)');
}

echo dateDifference($date1, $date2);

?>