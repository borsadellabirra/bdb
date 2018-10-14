<?php

	include("admin/config.php");

	include("admin/connessione_db.php"); 
	
?>

<?php
	$table_user = "utenti";
	
	mysql_connect($host,$db_user,$db_psw) or die("Impossibile collegarsi al server");
	@mysql_select_db("$db_name") or die("Impossibile connettersi al database $db_name");
	
	$sqlquery = "SELECT * FROM $table_user" ;
	$result = mysql_query($sqlquery);
	$number = mysql_num_rows($result);
	
	$i = 0;
	echo "<li data-icon='star'>"

	while ($number > $i) {

	$id = mysql_result($result,$i,"id");
	$nomeutente = mysql_result($result,$i,"utente");
	$password = mysql_result($result,$i,"password");
	$mail = mysql_result($result,$i,"mail");
	$data_inizio = mysql_result($result,$i,"data_inizio");
	$tema = mysql_real_escape_string($_POST['tema']);
	$attivo = mysql_result($result,$i,"attivo");
	$borsa_aperta = mysql_result($result,$i,"borsa_aperta");
	$vip = mysql_result($result,$i,"vip");

	if $vip == 1
		{
		echo "
			<a href='https://www.borsadellabirra.it/";print $nomeutente;echo "/ rel='external' class='ripple-effect'>"
			echo "<img src='img/";print $nomeutente;echo ".png' height='100' width='100'>"
			echo "<h3>DEMO</h3>
			<p>www.borsadellabirra.it/";print $nomeutente;echo "</p>
			</a>"
		}
	$i++;
	}
	echo "</li>"
?>