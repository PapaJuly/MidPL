<html>
<head>
    <title>Entrada desde la Web</title> 
</head>

<body>
    <?php
    echo "escribe al final del url ?pasamos=\"lo que quieras\"";
    echo 'Me pasaste esto por el URL: '.$_GET['pasamos'];
    if($_GET){
        echo "<br>";
        echo "<b>FELICIDADES</b>";
    }
    ?>

</body></html>