<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Comparaisons</h1>
<p>Question 1 :</p>
<p>Créer une fonction from scratch qui s'appelle estIlMajeur(). Elle prendra un argument de type int. Elle devra retourner un boolean.Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false Exemple : age = 5 ==> false age = 34 ==> true</p>

 <?php
 function estIlMajeur($age){ // fonction estilmajeur avec variable age en parametre
    if ($age>=18) {//mes conditions
        return true;// true ou false suffit
    }
    else {
        return false;
    }
 }
 $d = estIlMajeur(34);// je met ma function avec 34  en vameur de ma variable
 var_dump ($d); // var_dump — Affiche les informations d'une variable
 ?>   

<p>Question 2 :</p>
<p>Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux</p>

<?php
function plusGrand($age1,$age2){
    return max($age1,$age2);
}
echo plusGrand(15,34);
?>

<p>Question 3 :</p>
<p>Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra deux arguments de type int. Elle devra retourner le plus petit des deux.</p>

<?php
function plusPetit($age1,$age2){
    return min($age1,$age2);
}
echo plusPetit(15,34);
?>

<p>Question 4 :</p>
<p>Créer une fonction from scratch qui s'appelle lePlusPetit(). Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.</p>

<?php
function lePlusPetit($age1,$age2,$age3){
    return min($age1,$age2,$age3);
}
echo lePlusPetit(15,34,4);
?>

</body>
</html>