 <?php
 function connexion(){
      $utilisateur = "ngamc1600974";
      $motdepasse = "$NgamTech9696$";
      $basededonnees="ngamc1600974";
      
      
      try {
        $conn = new PDO("mysql:dbname=ngamc1600974;host=185.98.131.148",'ngamc1600974','$NgamTech9696$');

        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
      } 

      catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
      }   
      return null;  
    }
    $bdd = connexion();
    ?>