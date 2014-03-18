<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Functionalities
{
    //function for positive range integers
    public function PositiveIntRange($string)
    {
        $array = explode(",", $string);//explode the string to array
        $rs = "";
        for($i=0;$i<count($array);$i++)// loop the array
        {
              if($array[$i] % 3 == 0 && $array[$i] % 5 == 0 )//conditions
                {
                     $rs .= "FizzBuzz&nbsp;";
                }
              elseif($array[$i] % 3 == 0)
                {
                    $rs .= "Fizz&nbsp;";
                }
              elseif($array[$i] % 5 == 0)
                {
                     $rs .= "Buzz&nbsp;";
                }
               else
                {

                    
                    $rs .= $array[$i]."&nbsp;";
                    
                }
        }
        return $rs;
    }
     //function for positive range integers to print Bazz for consecutive ones
    public function PositiveIntRangeConsecutive($string2)
    {
        $array1 = explode(",", $string2);//explode the string to array
        $rs1 = "";
        for($j=0;$j<count($array1);$j++)//loop array
        {
           if($array1[$j] % 3 == 0) 
           {
                 $rs1 .= "Fizz&nbsp;";
                 $j++;
                 if($j<count($array1))
                 {
                    if($array1[$j] % 5 == 0)
                    {
                       $rs1 .= "Buzz&nbsp;";  
                       $j++;
                    }
                     $rs1 .= "Bazz&nbsp;";
                 }
                
                 
           }
           elseif($array1[$j] % 5 == 0)
            {
               
                 $rs1 .= "Buzz&nbsp;";
                 $j++;
                  if($j<count($array1))
                 {
                    if($array1[$j] % 3 == 0)
                   {
                      $rs1 .= "Fizz&nbsp;"; 
                      $j++;
                   }

                   $rs1 .= "Bazz&nbsp;";
                 } 
            }
            else
            {
                $rs1 .= $array1[$j]."&nbsp;";
            }
        }
        return $rs1;
    }
}