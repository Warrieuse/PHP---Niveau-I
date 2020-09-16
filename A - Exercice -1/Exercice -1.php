<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
<!------------------------------------------------------------------------------------------->
<p>Question 1 :</p>
<p>Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!</p>

<?php echo '<p>Hello World</p>' ;


function helloWorld() {
    return "Texte à afficher"; // return retourne la fonction aucun affichage sur la page
}
echo helloWorld();//mais je l'appel en dehors de la fonction pour l'afficher
?>

<!------------------------------------------------------------------------------------------->
<p>Question 2 :</p>
<p>Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf(). <br> Elle doit retourner "Mon super formateur de dev web"</p>

<?php
$monSuperFormateurDeDevWeb = "Térence";
function quiEStLeMeilleurProf(){
    return "Mon super formateur de dev web";
}
echo "Mon super formateur de dev web s'appel ...".$monSuperFormateurDeDevWeb."."."<br/>";
echo quiEStLeMeilleurProf();
?>

<!------------------------------------------------------------------------------------------->
<p>Question 3 :</p>
<p>Créer une fonction from scratch qui s'appelle jeRetourneMonArgument(). <br> Exemple : argument = "abc" ==> return abc <br> arg = 123 ==> return 123</p>

<?php

function jeRetourneMonArgument($argument){// je declare ma variable en parametre
    return $argument*2;//je le multiplie part 2 en ex
}
echo jeRetourneMonArgument(4);// et je lui donne la valeur de 4 ( 4*2 = 8)
?>

<p>Question 4 :</p>
<p>Créer une fonction from scratch qui s'appelle concatenation(). Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux. Exemple : argument 1 = "Kingsley" argument 2 = "Coman"Resultat : "KingsleyComan"</p>

<?php   

function concatenation($string1,$string2){
    return $string1 . $string2;
}
echo concatenation("Dub"," INC");
?>

<p>Question 5 :</p>
<p>Créer une fonction from scratch qui s'appelle concatenationAvecEspace(). Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux avec un espace entre les deux. Exemple : argument 1 = "Manuel" argument 2 = "Neuer"Resultat : "Manuel Neuer"</p>

<?php
function concatenationAvecEspace($argument1,$argument2){
    return $argument1." ".$argument2;
}
echo concatenationAvecEspace("Buy Buy","Finito")
?>
</body>
</html> 