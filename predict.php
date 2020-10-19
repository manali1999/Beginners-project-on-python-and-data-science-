<?php
// Receive GET Parameters
//echo "hii";
$Boyer = $_GET["Boyer"];
$Brébeuf = $_GET["Brébeuf"];
$CSC = $_GET["CSC"];
$Maisonneuve_2 = $_GET["Maisonneuve_2"];
$Maisonneuve_3 = $_GET["Maisonneuve_3"];
$Notre_Dame = $_GET["Notre_Dame"];
$Parc = $_GET["Parc"];
$PierDup = $_GET["PierDup"];
$Rachel_Hôtel_de_Ville = $_GET["Rachel_Hôtel_de_Ville"];
$Rachel_Papineau = $_GET["Rachel_Papineau"];
$René_Lévesque = $_GET["René_Lévesque"];
$Saint_Antoine = $_GET["Saint_Antoine"];
$Saint_Urbain = $_GET["Saint_Urbain"];
$Totem_Laurier = $_GET["Totem_Laurier"];
$University = $_GET["University"];
$Viger = $_GET["Viger"];


system("python Traffic.py ".$Boyer." ".$Brébeuf." ".$CSC ." ".$Maisonneuve_2." ".$Maisonneuve_3." ".$Notre_Dame." ".$Parc." ".$PierDup." ".$Rachel_Hôtel_de_Ville." ".$Rachel_Papineau." ".$René_Lévesque." ".$Saint_Antoine." ".$Saint_Urbain." ".$Totem_Laurier." ".$University." ".$Viger." 2>&1");

?>

