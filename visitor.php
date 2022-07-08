<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>
      table,td,th{border:1px solid black;
                 width:35%;
                text-align:center;
                 background-color:lightgray;
               }
      table{margin:auto;}
      input,p{ text-align:right; }
    </style>

</head>
<body>
     <form method="post" >
         <table>
             <caption><h2>simple calculator</h2></caption>
             <tr>
              <td>first number:</td>
              <td><input type="text" name="num1"/>
            </td>
            <td rowspan="2"><button type="submit" name="submit" value="calculate">calculate</td></tr>
            <tr>
            <td>second number:</td>
              <td><input type="text" name="num2"/>
            </td>
            </tr>
            
         </table>
         
     </form>
     <?php
     if(isset($_POST['submit']))
     {
         $num1=$_POST['num1'];
         $num2=$_POST['num2'];
         if(is_numeric($num1) and is_numeric($num2))
         {
             echo"<table><tr><td>Addition:</td><td><p>".($num1+$num2)."</p></td></tr>";
             echo"<tr><td>subtraction:</td><td><p>".($num1-$num2)."</p></td></tr>";
             echo"<tr><td>multiplication:</td><td><p>".($num1*$num2)."</p></td></tr>";
             echo"<tr><td>division:</td><td><p>".($num1/$num2)."</p></td></tr>";
             echo"</table>";
         }
         else
         {
             echo"<script type='text/javascript'>alert('enter the valid number');</script>";
         }

     }
    ?>
</body>
</html>