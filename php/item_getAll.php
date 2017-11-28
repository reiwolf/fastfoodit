<?php
	/*
		* Lista todas as categorias
	*/
  
        require_once("./conn.inc.php");
        
        $cat = $_REQUEST[id];
        
        if ($cat == '') {
          echo "faltam parametros!";
          exit;
        }

        $sql = "SELECT *
            FROM `itens`
            WHERE cat_id = $cat 
            ORDER BY item_nome";

        $res = query( $sql );
        $data = [];
    
        while ($row = mysql_fetch_array($res)) {	
                $data[] = Array( 
                                 'codigo' => $row[item_id],
                                 'nome'   => $row[item_nome]
                                ); 		
        }

        echo json_encode($data);
?>
