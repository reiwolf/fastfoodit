<?php
  //Set these headers to avoid any issues with cross origin resource sharing issues
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
  header('Access-Control-Allow-Headers: Content-Type,x-prototype-version,x-requested-with');

/*
	Somente funções
*/

// Esta função se conecta, executa o sql e encerra a conexão
function query($sql) {

        $host="localhost";
        $user="root";
        $pass="#senha";
        $database = "meumundo";


        $db = mysql_connect( $host, $user, "$pass") or die("Erro! ".mysql_error());
        mysql_select_db("$database", $db) or die("Erro!! ".mysql_error());

        // Definindo o charset como utf8 para evitar problemas com acentuação
        $charset = mysql_set_charset('utf8');

        $rtn = mysql_query($sql, $db) or die("ERRO!!!<hr>$sql<hr>".mysql_error());

        mysql_close($db);

	return $rtn;
}
?>
