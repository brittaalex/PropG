<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'classes/Functionalities.class.php';
$Fobj = new Functionalities();
$output = "";
$str = "";
if(isset($_GET['task'])&&$_GET['task'] == 1)
{
     $str = $_POST['field1'];
     echo $output = $Fobj->PositiveIntRange($str);
     exit;
}
elseif(isset($_GET['task'])&&$_GET['task'] == 2)
{
     $str1 = $_POST['field2'];
     echo $output = $Fobj->PositiveIntRangeConsecutive($str1);
     exit;
}
