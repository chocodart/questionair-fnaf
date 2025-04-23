<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <head>
        <title>Résultat</title>
    </head>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $un = $_POST['1'];
        $deux = $_POST['2'];
        $trois = $_POST['3'];
        $quatre = $_POST['4'];
        $cinq = $_POST['5'];
        $six = $_POST['6'];
        $sept = $_POST['7'];
        $huit = $_POST['8'];
        $neuf = $_POST['9'];
        $dix = $_POST['10'];
        $onze = $_POST['11'];
        $douze = $_POST['12'];
        $treize = $_POST['13'];
        $quatorze = $_POST['14'];
        $quinze = $_POST['15'];
        $seize = $_POST['16'];
        $dsept = $_POST['17'];
        $dhuit = $_POST['18'];
        $dneuf = $_POST['19'];
        $vingt = $_POST['20'];

        $score = 0;

        if ($un == 'a'){
            $score = $score+1;
        }
        if ($deux == 'c'){
            $score = $score+1;
        }
        if ($trois == 'b'){
            $score = $score+1;
        }
        if ($quatre == 'b'){
            $score = $score+1;
        }
        if ($cinq == 'a'){
            $score = $score+1;
        }
        if ($six == 'b'){
            $score = $score+1;
        }
        if ($sept == 'd'){
            $score = $score+1;
        }
        if ($huit == 'd'){
            $score = $score+1;
        }
        if ($neuf == 'c'){
            $score = $score+1;
        }
        if ($dix == 'd'){
            $score = $score+1;
        }
        if ($onze == 'b'){
            $score = $score+1;
        }
        if ($douze == 'a'){
            $score = $score+1;
        }
        if ($treize == 'a'){
            $score = $score+1;
        }
        if ($quatorze == 'b'){
            $score = $score+1;
        }
        if ($quinze == 'b'){
            $score = $score+1;
        }
        if ($seize == 'b'){
            $score = $score+1;
        }
        if ($dsept == 'a'){
            $score = $score+1;
        }
        if ($dhuit == 'd'){
            $score = $score+1;
        }
        if ($dneuf == 'c'){
            $score = $score+1;
        }
        if ($vingt == 'b'){
            $score = $score+1;
        }

        if (0 < $score < 6){
            echo"<h1>Tu vien de découvrir le monde de fnaf, bienvenue</h1>";
        }

        if (5 < $score < 11){
            echo"<h1>Tu as deja entendu parlé de fnaf</h1>";
        }

        if (10 < $score < 16){
            echo"<h1>Tu connais bien l'univers fnaf</h1>";
        }

        if ((15 < $score < 21)){
            echo"<h1>Tu es un fan absolue de fnaf</h1>";
        }
    }

    else {
        echo "<h1>Erreur : Formulaire non soumis</h1>";
    }
?>
<button><a href="Quest.php">Retente ta chance!</a></button>