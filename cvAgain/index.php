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

<?php
    if ($_POST){
        echo '<div id="invoice">';
        echo "<html><body><center><table>\n\n";
  
        // Open a file
        $file = fopen($_POST['text'], "r");
  
        // Fetching data from csv file row by row
        while (($data = fgetcsv($file)) !== false) {
  
            // HTML tag for placing in row format
            //echo "<tr>";
            foreach ($data as $i=>$item) {
              if ($i == 0){
                echo "<br>";
                echo "<p style=\"text-align:left;\"><b>" . htmlspecialchars($item)
                    . "</b></p>";
              }
              else {
                echo  "<p style=\"text-align:center;\"> -" . htmlspecialchars($item)
                    . "</p>";
              }
              
            }
            //echo "</tr> \n";
            echo "</div>";
        }
  
        // Closing the file
        fclose($file);
  
        echo "\n</table></center></body></html>";
        
}
?>

   </body>

</html>