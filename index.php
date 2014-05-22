<?php
//creare conexiune baza de date
$db = mysql_connect("localhost","root");
    if(!$db) {
        die("conexiune cu bd a esuat: " . mysql_error());
   }
//selectare bd
$db_select = mysql_select_db("biblioteca",$db);
    if(!$db_select){
        die("selectare bd a esuat: " . mysql_error());
    }
?>
<head>
    <title>Biblioteca</title>
</head>
<body>
    <?php
    //db query
    $result = mysql_query("select * from autori", $db);
    if (!$result) {
        die("query db a esuat: " . mysql_error());
    }
    
    //return data
    while($row = mysql_fetch_array($result)){
        echo $row[2]." ".$row["nume"].<br />";
    }
    ?>
</body>
</html>

<?php
    //inchide conexiune
    mysql_close($db);
?>