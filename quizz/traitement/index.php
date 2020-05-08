<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
<div class="header">
   <div class="logo"></div>
   <div class="header-text"><p> Le plaisir de jouer</p></div>
</div>
<div class="content">
<?php
session_start();

  require_once("../traitement/function.php");

 if (isset($_GET['page'])) {
     switch ($_GET['page']) {
         case 'accueil':
            require_once("../pages/admin.php");
         break;
         case 'jeux':
                require_once("../pages/jeux.php");            
         break;
     }
 
   }else {
       if (isset($_GET['statut']) && $_GET['statut']==="logout") {
           deconnexion();
       }
        require_once("../pages/connexion.php");       
   }
 

?>
</div>

</body>
</html>