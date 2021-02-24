	<?php    
    	try{
    		$servname = "localhost"; $dbname = "RamenIchiraku"; $user = "root"; $pass = "anissa";
       		$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        	$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	//Select NB FLASH JUILLET
        	$sth = $dbco->query("SELECT count(ID_QRCode) FROM Client");
	        	while($donnee = $sth->fetch()){
	        	//Var with result
				$first = htmlspecialchars($donnee['0']);
	        	}  
    	}          
    	catch(PDOException $e){
        	echo "Erreur : " . $e->getMessage();
    	}
    ?>