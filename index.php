<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $montant=0;
        $meuble1='A';
        $meuble2='B';
        $meuble3='C';
        echo ""
        if ($montant==0) {
            echo "Quel est votre budget d'achat ?"; 
        }
        elseif ($montant==100) {
            echo "A ce prix, vous pouvez vous offrir le meuble". "  ". $meuble1; 
        }
        elseif ($montant==200) {
            echo "A ce prix, vous pouvez vous offrir le meuble". "  ". $meuble2; 
        }
        elseif ($montant==500) {
            echo "A ce prix, vous pouvez vous offrir le meuble". "  ". $meuble3; 
        }
        else {
            echo "Désolé, nous n'avons pas de meuble disponible à ce prix."; 
        }
    ?>
</body>
</html>