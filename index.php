<html>
     <head>
	    <meta charset="utf_8"/>
		<title> liste des comptes des clients </title>
		<link rel="stylesheet"href="boostrap/boostrap.min.css"></link>
		<script src="boostrap/js/boostrap.min.js"></script>
		</head>
		<body>

		<?php
		
		if(isset($_GET['Message'])){
		echo '<h1>'.$_GET['Message'].'<h1>';
		}
		?>
		<p>
	      Ajouter votre inscription  <a href="Ajouter.php">ici </a>
       </p>
		<table border="1" widh="80%">
		<tr> 
		   <th colspan="9"> liste des comptes des clients</th>
		 </tr>
		    <tr>
		    <td>id</td>
			<td>nom</td>
			<td>prenom</td>
			<td>email</td>
			<td>adresse</td>
			<td>numtel</td>
            <td>update</td>
	        <td>Supprimer</td>
		</tr>
<?php
$bd=new PDO('mysql:host=localhost;dbname=rest','root' ,'');
$rq='select id ,nom ,prenom, email, adresse, numtel from rest  ; ';
$resultat=$bd->query($rq);
$inscrit=$resultat->fetchAll();
foreach($inscrit as $Etd)
{
?>
  <tr>
         <td><?php echo $Etd['id'];?></td>
		 <td><?php echo $Etd['nom'];?></td>
		 <td><?php echo $Etd['prenom'];?></td>
		 <td><?php echo $Etd['email'];?></td>
		 <td><?php echo $Etd['adresse'];?></td>
		 <td><?php echo $Etd['numtel'];?></td>
	  <td> <a href="modifier.php?id=<?php echo $Etd['id'];?>"> Update</a></td>
	  <td> <a href="Supprimer.php?Action=Delete&id=<?php echo $Etd['id'];?>"> Delete</a></td>

</tr>
<?php
}
?> 
</table>
</body>
</html>
