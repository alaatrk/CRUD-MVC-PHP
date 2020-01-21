<html>
<head> 
<title> modifier votre inscription </title> 
<link rel="stylesheet"href="boostrap/boostrap.min.css"></link>
		<script src="boostrap/js/boostrap.min.js"></script>
</head>
<body>
<?php
$param = array('id'=> $_GET['id']);
$db=new PDO('mysql:host=localhost;dbname=rest','root' ,'');
$Rq='select id,nom,prenom,email,adresse,numtel from rest where id=id';
$stm=$db->prepare($Rq);
$stm->execute ($param);
$inscrit=$stm->fetchall();
$inscrit=$inscrit[0];
?>
<form action="ModifierAction.php" method="post">

 <input type ="hidden" name="id" value="<?=$inscrit['id'];?>" />

<p>
Nom : <input value="<?=$inscrit['nom'];?>" type="texte" name ="nom" required/>
</p>
<p>
Prenom: <input value="<?=$inscrit['prenom'];?>" type="texte" name ="prenom" required/>
</p>
<p>
Email : <input value="<?=$inscrit['email'];?>" type="texte" name ="email" required/>
</p>
<p>
Adresse: <input value="<?=$inscrit['adresse'];?>" type="texte" name ="adresse" required/>
</p>
<p>
Numéro de télephone : <input value="<?=$inscrit['numtel'];?>" type="texte" name ="numtel" required/>
</p>
<p>
    <input type="submit" value="Envoyer" />
</p>






</form>









</body>
</html>