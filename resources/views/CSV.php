<?php
session_start();
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="'.$_SESSION["RegUsers"][0]->event_name.'.csv"');
$i=0;

foreach($_SESSION['RegUsers'] as $users){
    $user_CSV[$i] = array(iconv('utf-8', 'cp1252',$users->last_name),iconv('utf-8', 'cp1252',$users->first_name),iconv('utf-8', 'cp1252',$users->email));
    $i++;
}

$fp = fopen('php://output', 'wb');
foreach ($user_CSV as $line) {
    // though CSV stands for "comma separated value"
    // in many countries (including France) separator is ";"
    fputcsv($fp,$line,',');
}
fclose($fp);

?>