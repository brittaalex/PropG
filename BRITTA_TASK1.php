<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html lang="en">
    <title>Task-1</title>
    <meta charset="utf-8">

    <head>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript">
            //on clicking the form button,the form data is serialized to process for the functionality
         $(document).on("click","#sub",function(e)
             {
                 if($('#field1').val() !== "")
                 {
                 var data = $("#frm_task1").serialize();
                 var sturl = "http://localhost/GitHub/PropG/ajax_task.php?task=1";
                 $.ajax({
                         type : "POST",
                         url :sturl,
                         data:data,
                         success:function(data)
                         {
                            $("#result").html(data);
                         }
                       });
                 }
                 else
                 {
                     alert("Please enter a number string!");
                 }
             });
              //on clicking the form button,the form data is serialized to process for the functionality
         $(document).on("click","#sub1",function(e)
             {
                 if($('#field2').val() !== "")
                 {
                 var data = $("#frm_task2").serialize();
                 var sturl = "http://localhost/GitHub/PropG/ajax_task.php?task=2";
                 $.ajax({
                         type : "POST",
                         url :sturl,
                         data:data,
                         success:function(data)
                         {
                            $("#result1").html(data);
                         }
                       });
                 }
                 else
                 {
                     alert("Please enter a number string!");
                 }
             });
        </script>
    </head>
    <body>
        <form method="post" name="frm_task1" id="frm_task1">
                    <table><tr>
                            <td>Enter the numbers:&nbsp;&nbsp;(eg:12,13...16)</td>
                            <td><input type="text" name="field1" id="field1" value=""/></td>
                        </tr><tr>
                            <td>&nbsp;</td><td><input type="button" name="sub" id="sub" value="SUBMIT"/></td>
                        </tr>
                        <tr>&nbsp;</tr>
                        <tr><td>Output:</td></tr>
                        <tr><div style="margin-top: 90px;position: absolute;" id="result"></div></tr>
                    </table>
        </form>
        <form method="post" name="frm_task2" id="frm_task2">
                    <table><tr>
                            <td>Enter the numbers:&nbsp;&nbsp;(eg:12,13...16)</td>
                            <td><input type="text" name="field2" id="field2" value=""/></td>
                        </tr><tr>
                            <td>&nbsp;</td><td><input type="button" name="sub1" id="sub1" value="SUBMIT"/></td>
                        </tr>
                        <tr>&nbsp;</tr>
                        <tr><td>Output:</td></tr>
                        <tr><div style="margin-top: 90px;position: absolute;" id="result1"></div></tr>
                    </table>
        </form>
    </body>
</html>
