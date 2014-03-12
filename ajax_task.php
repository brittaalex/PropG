<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'classes/Functionalities.class.php';//include class file
$Fobj = new Functionalities();//initialize the class
$output = "";
$str = "";
if(isset($_GET['task'])&&$_GET['task'] == 1)//Case of task ==1 ,check if the query string is set
{
     $str = $_POST['field1'];//get the field value
     echo $output = $Fobj->PositiveIntRange($str);//pass it to function
     exit;
}
elseif(isset($_GET['task'])&&$_GET['task'] == 2)
{
     $str1 = $_POST['field2'];
     echo $output = $Fobj->PositiveIntRangeConsecutive($str1);
     exit;
}
