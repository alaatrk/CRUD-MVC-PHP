<?php
$param = array (
'id'=>$_POST['id'],
'nom'=>$_POST['nom'],
'prenom'=>$_POST['prenom'],
'email'=>$_POST['email'],
'adresse'=>$_POST['adresse'],
'numtel'=>$_POST['numtel'],);
$db=new PDO('mysql:host=localhost;dbname=rest','root' ,'');
$Rq='insert into rest (id, nom, prenom,email,adresse,numtel )value(:id, :nom, :prenom,:email,:adresse,:numtel)';
$stm=$db->prepare($Rq);
$retour=$stm->execute($param);
if($retour)
	header ("location:index.php?Message= Insert done");
else
		header ("location:index.php?Message=Insert done !!!");















?>