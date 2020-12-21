<?php
$connect = mysqli_connect("localhost", "root", "", "school");
if(mysqli_connect_errno())
{
	echo 'Failed to connect to database'.mysqli_connect_error();
}

$query = "";
$uploadfile=$_FILES['uploadfile']['tmp_name'];

require 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

$objExcel = PHPExcel_IOFactory::load($uploadfile);

//echo $objExcel->getSheetCount();

$sheetNames = $objExcel->getSheetNames();

foreach($sheetNames as $sheetNameIndex => $sheetName)
{
    $klass = $objExcel->setActiveSheetIndexByName($sheetName)->rangeToArray('A1:A1');
    $sc_1_mon_a = $objExcel->setActiveSheetIndexByName($sheetName)->rangeToArray('A2:A2');
    $sc_2_mon_a = $objExcel->setActiveSheetIndexByName($sheetName)->rangeToArray('A3:A3');
    $sc_3_mon_a = $objExcel->setActiveSheetIndexByName($sheetName)->rangeToArray('A4:A4');
    $sc_4_mon_a = $objExcel->setActiveSheetIndexByName($sheetName)->rangeToArray('A5:A5');
    $sc_5_mon_a = $objExcel->setActiveSheetIndexByName($sheetName)->rangeToArray('A6:A6');
    $sc_6_mon_a = $objExcel->setActiveSheetIndexByName($sheetName)->rangeToArray('A7:A7');
    $sc_7_mon_a = $objExcel->setActiveSheetIndexByName($sheetName)->rangeToArray('A8:A8');

    foreach($klass as $d){
        foreach($d as $sc_classname){
          //echo $sc_classname;
        }
    }

    foreach($sc_1_mon_a as $d){
        foreach($d as $sc_1_mon){
          //echo $sc_1_mon;
        }
    }

    foreach($sc_2_mon_a as $d){
        foreach($d as $sc_2_mon){
          //echo $sc_2_mon;
        }
    }

    foreach($sc_3_mon_a as $d){
        foreach($d as $sc_3_mon){
          //echo $sc_3_mon;
        }
    }

    foreach($sc_4_mon_a as $d){
        foreach($d as $sc_4_mon){
          //echo $sc_4_mon;
        }
    }

    foreach($sc_5_mon_a as $d){
        foreach($d as $sc_5_mon){
          //echo $sc_5_mon;
        }
    }

    foreach($sc_6_mon_a as $d){
        foreach($d as $sc_6_mon){
          //echo $sc_6_mon;
        }
    }

    foreach($sc_7_mon_a as $d){
        foreach($d as $sc_7_mon){
          //echo $sc_7_mon;
        }
    }

    $query .= "INSERT INTO `schedules`(`id`, `sc_classname`, `sc_1_mon`, `sc_2_mon`, `sc_3_mon`, `sc_4_mon`, `sc_5_mon`, `sc_6_mon`, `sc_7_mon`) VALUES (NULL, '$sc_classname', '$sc_1_mon', '$sc_2_mon', '$sc_3_mon', '$sc_4_mon', '$sc_5_mon', '$sc_6_mon', '$sc_7_mon'); ";
}

if(mysqli_multi_query($connect, $query)) {
    header('Location: /admin/schedules/');
}
?>
