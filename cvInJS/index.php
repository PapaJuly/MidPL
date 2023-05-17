<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body>
    <form method="post">
        submit your link to csv file containing your CV:
        <input type="text" name="text">
        <input type="submit" value="Submit">
    </form>
    <br>
    <p>Intenta con mi CV: https://docs.google.com/spreadsheets/d/e/2PACX-1vR6i7xUUWBDJyLeBWHhsawWnWgK3ET9YFIzI4a-Sy-Ozy2Ydtaeww2Le7VhHPYd3O5THSAxGTAtyU3n/pub?output=csv</p>
<?php
    if ($_POST){
        echo '<div id="invoice">';
        echo "<html><body><center><table>\n\n";
        echo "<p style=\"text-align:center;\"><b>CV</b></p>";
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
                echo  "<p style=\"text-align:left;\">&nbsp;&nbsp;&nbsp; -" . htmlspecialchars($item)
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
   
        <!-- <div id="invoice">
            <h2>Julián A. Soto Pérez</h2>
            <pre> <h5>    Phone: 787-310-4120</h5></pre>
            <pre><h5>    Email: juliansoto1130@gmail.com</h5></pre>
            <pre><h5>    Address: rr01 box 2451</h5></pre>
            <br>
            <h3>Education: </h3>
            <pre><h4>    Pursuing an Undergraduate Degree in Computer Science, UPRM<h4></pre><pre><h5>      2020-Present, estimated graduation date May 2025</h5></pre>
            <br>
            <h3>Work Experience: </h3>
            <pre><h4>    Event Server: Coop Rincon <h4></pre><pre><h5>     2021-Present</h5></pre>
            <pre><h4>    Web Developer: Universidad de Puerto Rico, Mayaguez</h4></pre><pre><h5>     2023-present</h5></pre> -->

        </div>
        <br>
        <button class="btn btn-primary" onClick="generatePDF()" id="downloadbtn">Download</button>
        <script>
            function generatePDF(){
                var opt = {
                    margin:       1,
                    filename:     'myfile.pdf',
                    image:        { type: 'jpeg', quality: 0.98 },
                    html2canvas:  { scale: 2 },
                    jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
                  };
        var element = document.getElementById('invoice');
        html2pdf(element, opt);
            }
       </script>
</body>
</html>