<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
<p>Question 1 :</p>
<p>Créer une fonction from scratch qui s'appelle premierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le premier élement du tableau. Si l'array est vide, il faudra retourner null;</p>
 <?php
 $carotte = ["Carotte","Rapée","C'est","Bon","Pour","La","Santé"];//2 façon de crée un tableau                              ||
 $choux = array("Choux"=> 150, "à"=> 250,"la"=> 25,"crème"=> 32);// valeur numérique à mes string car utile dans question 3_||_
 function premierElementTableau($array1,$array2){ //                                                                       \  /
     if ((empty($array1)) AND (empty($array2))) {//si tableau vide retour null                                              \/           
        return null;
     } else {
        return $array1."<br> et <br>".current($array2);
        //sinon je retourne le 1er tableau et à la ligne et je retourne egalement le 1er element du 2èm tableau grace a current.
     }   
 }
 echo "Le premier element des tableaux est ".premierElementTableau($carotte[0],$choux)."."; // j'affiche les 2 valeurs des 1er elements des tableaux
 ?>   

<p>Question 2 :</p>
<p>Créer une fonction from scratch qui s'appelle dernierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le dernier élement du tableau. Si l'array est vide, il faudra retourner null;</p>

<?php

 function dernierElementTableau($array1,$array2){
     if ((empty($array1)) AND (empty($array2))) {
        return null;
     } else {
        return $array1."<br> et <br>".end($array2);
     }   
 }
 echo "Le dernier element des tableaux est ".dernierElementTableau($carotte[6],$choux)."."; 
 ?> 

<p>Question 3 :</p>
<p>Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra un argument de type array. Elle devra retourner le plus grand des élements présent dans l'array. Si l'array est vide, il faudra retourner null;</p>

<?php

 function plusGrand($array1,$array2){
     if ((empty($array1)) AND (empty($array2))) {
        return null;
     } else {
        return max($array1)."<br> et <br>".max($array2);
     }   
 }
 echo "Le plus grand element des tableaux est ".plusGrand($carotte,$choux)."."; // resultat Santé = car derniere lettre de par rapport a l'alphabet
 ?> 

<p>Question 4 :</p>
<p>Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra un argument de type array. Elle devra retourner le plus petit des élements présent dans l'array. Si l'array est vide, il faudra retourner null;</p>
<?php

 function plusPetit($array1,$array2){
     if ((empty($array1)) AND (empty($array2))) {
        return null;
     } else {
        return min($array1)."<br> et <br>".min($array2);
     }   
 }
 echo "Le plus petit element des tableaux est ".plusPetit($carotte,$choux)."."; // resultat BON car 1er lettre de l'alphabet bref me suis comprise
 ?> 


</body>
</html>