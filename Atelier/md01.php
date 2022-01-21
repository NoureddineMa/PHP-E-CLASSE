
<?php


//   2) :
//  Exercice n'=2  :

echo 'Hello youcode';

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

// Exercice 3 : 

// Déclaration des varialbes 


$monNom = "maher";
$monPrenom = "Noureddine";
$monAge = 21;

// Syntaxe :

echo "Mon prenom c'est $monPrenom";
echo "<br>";
echo "Mon prenom c'est $monNom";
echo "<br>";
echo"j'ai $monAge ans";

echo '<br/>';
echo '<br/>'; // pour sauter la ligne 

// 3) : 
// Single quote 

echo 'Mon prenom c\'est $monPrenom';
echo "<br>";
echo 'Mon prenom c\'est $monNom';
echo '<br>';
echo'j\'ai $monAge ans';

echo '<br/>';
echo '<br/>'; // pour sauter la ligne 
 

// 4) : 

// la différence entre "" et '' :

    // - c'est que double quotes affiche la valeur de la variable 
    // // et single quotes ne lit pas la variable et affiche le nom de cette variable .


// 5) :

//  Herodec  // Affichier value 

echo <<<MAHER

Mon prenom c'est $monPrenom
Mon nom c'est $monNom
j'ai $monAge ans 

MAHER;


 echo '<br/>';
 echo '<br/>';


//  6) :

// Nowdoc // affichier $var

echo <<<'NOUR'

M'on prenom c'est $monPrenom
Mon nom c'est $monNom
j'ai $monAge ans

NOUR;


// 7) : 

// Heredoc c'est une syntaxe pour affichier un string et
// Nowdoc c'est la meme chose mais il affiche que le nom du variable et non la valeur

// exercice 4 :

echo '<br/>';
 echo '<br/>';

$bool = true; 

$int = (int)$bool;


echo $int;
echo '<br/>';
// pour montrer le type de variable 
echo gettype($int) 










?>


