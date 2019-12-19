<?php

//var_dump($_GET);die;

$uname = $_GET['uname'];
$enfant = $_GET['enfant'];
$habitation = $_GET['habitation'];
//isset verifie si il existe
if (isset($_GET['abonnement'])){
  $abonnement = $_GET['abonnement'];
}
if (isset($_GET['emmerde'])) {
  $emmerde = $_GET['emmerde'];
}
if (isset($_GET ['clique'])) {
  $clique = $_GET ['clique'];
}
if (isset($_GET ['couleur'])) {
  $couleur = $_GET ['couleur'];
}

echo "Bonjour " .$uname . "<br>"
."Votre mot de passe est : " .$_GET['psw'];

echo "<br>";

if ($enfant == "oui") {
  echo "Vous avez des enfants ";
} else {
  echo "Vous n'avez pas d'enfants ";
}
echo "<br>";

if ($habitation == 'oui') {
  echo "Vous etes con";
}else {
  echo "Vous etes pas con";
}
echo "<br>";

//!empty permet de verifier si y'a quelque chose dans le message
//empty permet de verifier si c'est vide
if (!empty($abonnement)) {
  echo "Vous etes abonné";
}else {
  echo "Vous etes abonné quand meme";
}
echo "<br>";

if (!empty($emmerde)) {
  echo "On vous emmerde";
}else {
  echo "On vous emmerde pas";
}
echo "<br>";

if (!empty($clique)) {
  echo "Tu as cliquer";
}else {
  echo "Tu n'as pas cliquer";
}

foreach ($couleur as $valeur) {
  echo " " . $valeur . " ";
}
