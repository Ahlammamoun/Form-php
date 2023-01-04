<?php

//I include the file functions
require __DIR__ . '/../inc/functions.php';




//I check if the form was sent
if (!empty($_POST)) {

    //var_dump($_POST);



    // I get the informations and put them in a variable , and a value by default
    $age = (int) $_POST['age'] ?? false;
    $mention = (int) $_POST['mention'] ?? false;
    $salaire = (int) $_POST['salaire'] ?? false;



    //I check the data , are they valid ?
    if (
        $age !== false &&
        $mention !== false &&
        $salaire !== false
    ) {

    //I initiate a variable and put in it , the function and the values of the three variables
        $numeroPalier = calculPalier($age, $mention, $salaire);


    //I initiate an array with five different level 
        $listePaliers = [
            0 => 'Nous ne pouvons pas vous faire une offre',
            1 => '150',
            2 => '250',
            3 => '350',
            4 => '450'
        ];

    
        $tarif = $listePaliers[$numeroPalier];
        //var_dump($tarif);
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Logement universitaire</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="container">
        <div>
            <h1>Logement universitaire</h1>
            <h2>Calcul du loyer de l'étudiant</h2>


            <!--if this tow variables exist I display their values-->
            <?php if (isset($tarif) && isset($numeroPalier)) : ?>
                <p>
                    Votre étudiant à droit au tarif suivant <strong class="palier<?=  $numeroPalier ?>"><?= $tarif . ' euros' ?></strong>
                </p>
            <?php endif; ?>

            <form action="" method="post">


                <label for="age">Âge</label>
                <input id="age" type="number" name="age" value="" placeholder="" min="15" max="150" required>


                <label for="mention">Dernière mention</label>
                <input id="mention" type="number" name="mention" value="" placeholder="" min="0" max="150" required>


                <label for="salaire">Salaire des parents</label>
                <input type="number" name="salaire" value="" placeholder="" min="0" required>



                <button>Calculer le loyer</button>
            </form>

        </div>


    </div>

</body>

</html>