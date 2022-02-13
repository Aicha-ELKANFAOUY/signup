<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="dashboard.css" rel="stylesheet">
   <title>dashboard</title>
</head>
<body>
   
</body>
</html>
<?php
session_start();

include_once('config.php');

 $requete2 ="SELECT  username, email, password , Prenom, Nom , Apogee  FROM users ";
 $result2= mysqli_query($conn ,$requete2) ;
     
     echo"<ul > ";
     echo"<li><h3><a href='logout.php'>Deconnexion</a></h3> </li>";   
     echo"<li><h3><a href='monprofil.php'>Mon profil</a><h3></li>"; 
     echo"</ul> ";
    echo"<h1>la liste des étudiants </h1>"; 

  
echo"<h1><table border='1'> </h1>"; 

echo"<th>Apogee</th>";
echo"<th>Nom</th>";
echo"<th>Prenom</th>";
echo"<th>email</th>";
foreach($result2 as $key ){
 echo"<tr><td>";
 echo $key['Apogee'];
 echo"</td><td>";
 echo $key['Nom'];
 echo"</td><td>";
 echo $key['Prenom'];
 echo"</td><td>";
 echo $key["email"];


 echo"</td></tr>";

 //CNE,FIRSTNAME,LASTNAME,EMAIL,CITY
}
echo"</table>";

?>