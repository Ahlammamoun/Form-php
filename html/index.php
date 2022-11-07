<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mutuelle</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
</html>

<body>
    <main>
        <h1>Calcul du prix de votre mutuelle</h1>
        <form action="" method="GET">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
            <label for="age">Âge</label>
            <input type="number" name="age" id="age">
            <button>Je calcule</button>
            <!--I used button element , when it's in a from element that submit the form-->
        </form>
    </main>
    <aside>
        <h1>Résumé du calcul</h1>
        <h2>Calcul du tarif mutuelle pour </h2>
        <div class="answer">



        <!--I'm opening a php script , to check if the key 'lastename' exist in the 'GET' array and different to null, then I check if the user put something in the input -->
            <?php
            if (isset($_GET['lastname']) && $_GET['lastname'] !=='') {
        /*I initiate a variable 'lastname' I put in it the value of the key 'lastname' of the array 'GET'*/ 
                $lastname =  $_GET['lastname']  ;
        /*I display the varuiable concatener with en space */
                echo $lastname  . '  ';
            }else{
        /*else I display a hyphen */
                echo '-';
            };
        /*I do the same for the firstname */
            if (isset($_GET['firstname']) && $_GET['firstname'] !=='') {
                $firstname =  $_GET['firstname']  ;
                echo $firstname;
            };
            ?>

        </div>
        <h2>Tarif </h2>
        <div class="answer">

        </div>
    </aside>
</body>