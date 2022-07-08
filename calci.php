<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISITORS COUNT</title>
</head>
<body>
    <h1> WELCOME TO MY WEB PAGE</h1>
    <?php
     $file = "count.txt";
     $handle= fopen($file,'r') or die ("Error 1:cannot Open File:$file");
     $count= fread($handle,10);
     fclose($handle);
     $count=$count + 1;
     echo "<h2> No. of visitors visited the web page:$count</h2>";
     $handle=fopen($file,'w') or die ("Error 2:cannot open File:$file");
     fwrite($handle,$count);
     fclose($handle);
     ?>

</body>
</html>