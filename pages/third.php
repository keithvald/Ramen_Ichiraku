    <?php    
    	try{
    		$servname = "localhost"; $dbname = "RamenIchiraku"; $user = "root"; $pass = "anissa";
       		$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        	$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	//Select lang the most speaked
        	$sth = $dbco->query("SELECT Lang, COUNT(Client.Lang) AS LG FROM Client GROUP BY Lang ORDER BY LG DESC LIMIT 1");
	        	while($donnee = $sth->fetch()){
	        	//Var with result
				$third = htmlspecialchars($donnee['0']);
	        	}  
    	}          
    	catch(PDOException $e){
        	echo "Erreur : " . $e->getMessage();
    	}
    ?>