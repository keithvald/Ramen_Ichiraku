    <?php    
    	try{
    		$servname = "localhost"; $dbname = "RamenIchiraku"; $user = "root"; $pass = "anissa";
       		$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        	$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	//Select the day the most visited
        	$sth = $dbco->query("SELECT Date_Prise, COUNT(Client.Date_Prise) AS DP FROM Client GROUP BY Date_Prise ORDER BY DP DESC LIMIT 1");
	        	while($donnee = $sth->fetch()){
	        	//Var with result
				$fourth = htmlspecialchars($donnee['0']);
	        	}  
    	}          
    	catch(PDOException $e){
        	echo "Erreur : " . $e->getMessage();
    	}
    ?>