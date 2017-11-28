<?php
	/*
		* Lista todas as categorias
	*/
  
        require_once("./conn.inc.php");

        $sql = "SELECT *
            FROM `categorias`
            ORDER BY cat_nome";

        $res = query( $sql );
        $data = [];
    
        while ($row = mysql_fetch_array($res)) {	
                $data[] = Array( 
                                 'codigo' => $row[cat_id],
                                 'nome'   => $row[cat_nome]
                                ); 		
        }

        echo json_encode($data);
?>
