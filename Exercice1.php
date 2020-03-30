<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="nbre" id="">
    <input type="submit" name="button" value="Valider">
    </form>
    <caption>Les nombres premiers</caption>
         
    <?php
    
    $T1 = array( );
    $tinf = array();
    $tsup = array();
    if (isset($_POST['button'])) {

        if (is_numeric($_POST['nbre']) && ($_POST['nbre']>10000)) {
            $a=$_POST['nbre'];
            for ($i=1; $i <$a ; $i++) { 
                $count=0;
                for ($j=1; $j <=$i ; $j++) { 
                    if ($i%$j==0) {
                        $count++;
                        
                    }
                }
                if ($count==2) {
                   array_push($T1, $i);
                } 

            }
            $moyenne=moyenne($T1);
            echo $moyenne;
           for ($i=0; $i <count($T1) ; $i++) 
           {
            if ($T1[$i]<$moyenne) {
                array_push($tinf ,$T1[$i]);
             }
             else
             {
                array_push($tsup ,$T1[$i]);   
             }  
           }

           echo "<pre>";
           print_r($tinf);
          print_r($tsup);
        
            
        }
    }
 // LA FONCTION MOYENNE 
 function moyenne($tab){
     $somme=0;
    for ($i=0; $i < count($tab); $i++) { 
        $somme =$somme+$tab[$i];
        }
    return ($somme/count($tab));
    }
         
     
    ?>

    
    <table>
    
</table>
</body>
</html>