    <?php    
    	try{
    		$servname = "localhost"; $dbname = "RamenIchiraku"; $user = "root"; $pass = "anissa";
       		$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        	$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	//Select table's name most flashed
        	$sth = $dbco->query("SELECT Nom_QRCode, COUNT(Client.ID_QRCode) AS ID FROM QRCode INNER JOIN Client ON QRCode.ID_QRCode = Client.ID_QRCode GROUP BY Nom_QRCode ORDER BY ID DESC LIMIT 1");
	        	while($donnee = $sth->fetch()){
	        	//Var with result
				$second = htmlspecialchars($donnee['0']);
	        	}  
    	}          
    	catch(PDOException $e){
        	echo "Erreur : " . $e->getMessage();
    	}
    ?>