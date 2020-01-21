<?php
$param = array('id'=> $_GET['id']);
$db=new PDO('mysql:host=localhost;dbname=rest','root' ,'');
$Rq='delete from rest where id=:id;';
$stm=$db->prepare($Rq);
$stm->execute($param);
$retour = $stm->execute($param);


if($retour)
	header ("location:index.php?Message=Delete done");
else
		header ("location:index.php?Message=Delete done !!");
?> 