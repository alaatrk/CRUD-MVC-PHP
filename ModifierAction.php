<?php
$param = array ('id'=>$_POST['id'],
'nom'=>$_POST['nom'],
'prenom'=>$_POST['prenom'],
'email'=>$_POST['email'],
'adresse'=>$_POST['adresse'],
'numtel'=>$_POST['numtel'],);
$db=new PDO('mysql:host=localhost;dbname=rest','root' ,'');
$Rq='Update rest set nom=:nom, prenom=:prenom,email=:email,adresse=:adresse,numtel=:numtel  where id=:id';
$stm=$db->prepare($Rq);
$stm->execute ($param);
$retour=$stm->execute($param);
if($retour)
	header ("location:index.php?Message=Update done");
else
		header ("location:index.php?Message=Update done");

?>
