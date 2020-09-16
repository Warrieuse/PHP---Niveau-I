<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>

    <style>
    p{
        color:grey;
    }
    </style>
</head>
<body>
<h1>Exercice 5</h1>
<h4>Question 1 :</h4>
<p>Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password fait 8 caractères ou plus et false si il fait moins.</p>

<?php

$monMotDePasse = "Moua"; // test avec 2variables
$deuxMot = "Deux mots";

function verificationPassword(string $password){ // condition de mon parametre est un string

    $lenghtString = strlen($password);// calcul longueur de mon parametre
    $countWord = str_word_count($password);// calcul du nbr de mot utilisé

    if (($lenghtString >= 8) && ($countWord == 1)) {// la longueur doit etre minimal à 8 & en 1 seul mot.
        echo "Votre mot de passe est correct : ".$password."<br>";
        return $password;
    } else {
        echo "Votre mot de passe est incorrect.<br>";
        return false;
    }    
}
// test
echo verificationPassword($monMotDePasse);
echo verificationPassword($deuxMot).".<br>";
echo verificationPassword("bnfkbkbklbl").".<br>";
echo verificationPassword(15478545865).".<br>";
echo verificationPassword("unseulmot").".<br>";
echo verificationPassword("13 54 536").".<br>";
?>

<hr>

<h4>Question 2 :</h4>
<p>On améliore la verificationPassword() écrite précédemment. Elle prend toujours un argument de type string. Elle devra désormais retourner un boolean qui vaut true si le password respecte toutes les règles suivantes:* Faire au moins 8 caractères* Avoir au moins 1 chiffre* Avoir au moins une majuscule et une minuscule Et false dans tous les autres cas.</p>

<?php

function conditionPassword(string $password){

    $point=0;
    $point_min=0;
    $point_maj=0;
    $point_chiffre=0;
    $point_caracteres=0;

    $lenghtString = strlen($password);
    $countWord = str_word_count($password);

    for ($i=0; $i < $lenghtString ; $i++) { /// boucle for pour que tout mon mot de passe soit analysé

        $lettre = $password[$i];// nouvelle var pour selectionner une lettre par une lettre

        if ($lettre >= 'a' && $lettre <= 'z') { // je fait ma vérification du MDP par un compteur de point.

            $point_min = 1;

        } else if ($lettre >= 'A' AND $lettre <= 'Z') {

            $point_maj = 2;

        } else if ($lettre >= '0' AND $lettre <= '9') {

            $point_chiffre = 3;

        } else {

            $point_caracteres = 5;// non utile pour cet exo mais utile pour plus tard... ds la format°.

        }       
        }

    $calculPoint = $point_min + $point_maj + $point_chiffre + $point_caracteres;// total de point

    if (($calculPoint>=6) AND ($lenghtString >= 8)) {//j'estime qu'il faut un minimum de 6 point maj=2 chiffre = 3 et min = 1
        echo "Votre mot de passe rempli les conditions est ai donc validé.";
    } else {
        echo "Mot de passe non valide.";
    }
        
    }

echo conditionPassword($monMotDePasse).".<br>";
echo conditionPassword("aB1coucou").".<br>";
echo conditionPassword("aB1cou").".<br>";
echo conditionPassword("aBcoucou").".<br>";

?>

<hr>

<h4>Question 3 :</h4>
<p>Créer une fonction from scratch qui s'appelle capital(). Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :* France ==> Paris* Allemagne ==> Berlin* Italie ==> Rome* Maroc ==> Rabat* Espagne ==> Madrid* Portugal ==> Lisbonne* Angleterre ==> Londres* Tout autre pays ==> Inconnu Il faudra utiliser la structure SWITCH pour faire cette exercice.Bonus : Faîtes en sorte de gérer le nom nom des pays indépendamment de lacasse (majuscules/minuscules).</p>

<?php
function capital(string $pays){
switch ($pays) {
    case 'france':
        echo "La capitale de la FRANCE est Paris.";
        break;
    case 'espagne':
        echo "La capitale de l'ESPAGNE est Madrid.";
        break;
    case 'portugal':
        echo "La capitale du Portugal est Lisbonne.";
        break;
    case 'allemagne':
        echo "La capitale de l'ALLEMAGNE est Berlin.";
        break;
    case 'italie':
        echo "La capitale de l'ITALIE est Rome.";
        break;
    case 'maroc':
        echo "La capitale du MAROC est Rabat.";
        break;
    case 'angleterre':
        echo "La capitale de l'ANGLETERRE est Londres.";
        break;
    default:
        echo "INCONNU";
        break;
}
return $pays;
}
print (capital (strtolower('France')))."<br>"; // retourne la variable en minuscule
echo (capital (strtolower('alleMAgne')))."<br>";
echo (capital (strtolower('Russie')))."<br>";
echo (capital (strtolower('PORTUGAL')))."<br>";
?>

<hr>

<h4>Question 4 :</h4>
<p>Créer une fonction from scratch qui s'appelle listHTML(). Elle prendra deux arguments :* Une string représentant le nom de la liste* Un array représentant les élements de cette liste. Elle devra retourner une liste HTML. Chaque element de cette liste viendra du tableau passé en paramètre.<br> Exemple : <br> Argument titre : "Capitale"<br> Argument liste : ["Paris", "Berlin", "Moscou"] 
<br><br>Résultat :</p>
        <h3>Capitale</h3>
            <ul>
                <li>Paris</li>
                <li>Berlin</li>
                <li>Moscou</li>
            </ul>
<p>Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne entre les élements de la liste. Pas d'espace non plus entre le titre et la liste. <br> Contraintes :* Si le titre est null ou vide, il faut que la fonction retourne null. * Si l'array est vide (0 élément), il faut que la fonction retourne null.</p>

<?php

function listHTML( $pays, $ville){

    if (($pays==null) || ($ville==null))  {

        echo "il y a rien";
        return false;// false sert à rien mais c'est plus compréhensible.

    } else {
        //return "<h3>".$pays."</h3><ul><li>".$ville[0]."</li><li>".$ville[1]."</li><li>".$ville[2]."</li></ul>";

        echo "<h3>".$pays."</h3><ul>"; // sinon tu ecrit la var pays en h3 tu commence un liste
        for ($i=0; $i < count($ville); $i++) { // bouble for car le tableau peu etre evolutif 
            echo "<li>".$ville[$i]."</li>";//affiche le contenu du tableau sous format li
        }
        echo "</ul>";// fin de mon tableau.
    }    
}

$pays = 'France';
$ville = ['Bondy','Bargème','Grasse'];

echo listHTML('France', ['Bondy','Bargème','Grasse']);
echo listHTML($pays,$ville);

?>

<hr>

<h4>Question 5 :</h4>
<p>Créer une fonction from scratch qui s'appelle remplacerLesLettres(). <br> Elle prendra un argument de type string. Elle devra retourner cette même string mais en remplacant <br> les "e" par des "3", les "i" par des "1" et les"o" par des "0" <br> Exemple : <br> argument : "Bonjour les amis" ==> Output : "B0nj0ur l3s am1s"argument : <br> "La programmation Web est trop cool" ==> Output : "La pr0grammat10n W3b 3st tr0p c00l"</p> 

<?php

function remplacerLesLettres($maPhraseTest){

    $maPhraseTest = str_ireplace("1","I",$maPhraseTest);// achaque fois je transforme la valeur de ma variable
    $maPhraseTest = str_ireplace("2","A",$maPhraseTest);
    $maPhraseTest = str_ireplace("3","E",$maPhraseTest);
    $maPhraseTest = str_ireplace("4","A",$maPhraseTest);
    $maPhraseTest = str_ireplace("5","S",$maPhraseTest);
    $maPhraseTest = str_ireplace("7","T",$maPhraseTest);
    $maPhraseTest = str_ireplace("8","S",$maPhraseTest);
    return $maPhraseTest;
};
$maPhraseTest = "<p>UN B34U JOUR D'373, J'37415 5UR L4 PL4G3 37 J3 R3G4RD415 D3UX J3UN35 F1LL35 JOU4N7 D4N5 L3 54BL3. <br> 3LL35 CON57RU15413N7 UN CHÂ734U D3 54BL3, 4V3C 7OUR5, P4554G35 C4CH35 37 PON7-L3V15. \n 4LOR5 QU'3LL35 73RM1N413N7, UN3 V4GU3 357 4RR1V33 37 4 7OU7 D37RU17, R3DU154N7 L3 CH4734U 3N UN 745 D3 54BL3 37 D'3CUM3. <br> J'41 CRU QU'4PR35 74N7 D'3FFOR7, L35 F1LL37735 COM3NÇ3R413N7 4 PL3UR3R, M415 4U CON7R41R3 3LL35 COURRUR3N7 5UR L4 PL4G3, R14N7 37 JOU4N7 37 COMM3NÇ3R3N7 4 CON57RU1R3 UN 4U7R3 CHÂ734U. <br> J'41 COMPR15 QU3 J3 V3N415 D'4PPR3NDR3 UN3 GR4ND3 L3ÇON. NOU5 P455ON5 UN3 GR4ND3 P4R713 D3 NO7R3 V13 4 CON57RU1R3 D35 CHO535 M415 LOR5QU3 PLU5 74RD UN3 V4GU3 L35 D3MOL17, L35 53UL35 CHO535 QU1 R3573N7 5ON7 L'4M1713, L'4MOUR 37 L'4FF3C71ON 37 L35 M41N5 D35 G3N5 QU1 5ON7 C4P4BL35 D3 NOU5 F41R3 5OUR1R3.<br></p>";
echo $maPhraseTest;
echo "<br>";
echo remplacerLesLettres($maPhraseTest);

?>

<hr>

<h4>Question 6 :</h4>
<p>Créer une fonction from scratch qui s'appelle quelleAnnee().<br> Elle devra retourner un integer representant l'année actuelle.Cherchez en PHP comment on intéragit avec les dates !</p>

<?php
function quelleAnnee(){
    return idate("Y").".<br>";// retourne l'année actuelle.
}
echo "Nous sommes en ".quelleAnnee();
?>

<hr>

<h4>Question 7 :</h4>
<p>Créer une fonction from scratch qui s'appelle quelleDate(). Elle devra retourner une string representant la date actuelle sous le format suivantDD/MM/YYYYOù DD représente le jour actuel, MM le mois actuel et YYYY l'année actuelle. Là encore, cherchez comment en PHP on intéragit avec les dates.</p>

<?php
function quelleDAte(){
    $day = idate("d");//day of the month
    $month = idate("m");//month number
    $year = idate("Y");// year ( 4 digits) else "y"(1-2digits)

    if ($month < 10){
        //$month = "0".$month;
        $month = str_pad($month, 2, '0', STR_PAD_LEFT);// 2 façon de la faire
    } else {
        return $month;
    }
    
    return $day." / ".$month." / ".$year;
}

echo "Aujourd'huis, nous sommes :".quelleDAte().".<br>";

echo date("j / m / Y");// date prend plusieurs caractère contrairement à iDate.

?>

</body>
</html>
