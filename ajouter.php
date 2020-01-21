<html>
<head> 
<title> Ajouter une inscription </title> 
</head>
<body>

<form action="AjouterAction.php" method="post">

<p> Ajouter une inscription </p>
<p>
Id : <input  type="texte" name ="id" required/>
</p>
<p>
Nom : <input  type="texte" name ="nom" required/>
</p>
<p>
Prenom: <input type="texte" name ="prenom" required/>
</p>
<p>
Email : <input type="texte" name ="email" required/>
</p>
<p>
Adresse: <input type="texte" name ="adresse" required/>
</p>
<p>
Numéro de télephone : <input  type="texte" name ="numtel" required/>
</p>
<p>
    <input type="submit" value="Envoyer" />
</p>
</form>
</body>
</html>