<?php include("header.php");
?>
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
			<table id="structure">
				<tr>
					<td id="navigation">
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
					</td>
					<td id="page">
						<h2>Administrator</h2>
					    
						<ul>
							<li><a href="content.php">Editeaza Continut</a></li>
							<li><a href="new_user.php">Adauga User</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</td>
				</tr>
			</table>
		</div>
		<div id="footer"></div>
	</body>
</html>
<?php
    //inchide conexiune
    mysql_close($db);
?>