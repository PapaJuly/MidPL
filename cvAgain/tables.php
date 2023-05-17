<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <html>

<body>
    <form method="post">
        submit your link to csv file containing your CV:
        <input type="text" name="text">
        <input type="submit" value="Submit">
    </form>
    </body>

</html>

<?php
if ($_POST) {


    $file = $_POST('text');
   
    $handle = fopen($file, 'r');
  
    $data = fgetcsv($handle, 1000, ",");
   
    $all_record_arr = [];
   
    while (($data = fgetcsv($fileData)) !== FALSE) {
        $all_record_arr []= $data;
    }
    fclose($handle);
    
    }
    ?>
    <h1>Employee</h1>
    <table border="1">
        <thread><tn>A</tn><tn>B</tn><tn>C</tn><tn>D</tn></thread>
        <tbody>
    <h1>Employee</h1>
        <?php foreach($all_record_arr as $rec){?>
       <tr><td><?=$rec[0]?></td>
        <?php }?>
        </tbody>
        </table>


