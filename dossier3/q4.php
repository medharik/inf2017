<?php 
$db_username="fede";
$db_password="fedepassword";
$ipserveur="localhost";
$connection = new PDO('oci:dbname=//ipserveur:1521/orcl;', $db_username, $db_password);

$resultat=$connection->query("select numero_membre from course ");

while ($ligne=$resultat->fetch(PDO::FETCH_OBJ)) {
	?>
<div class="col-4">
<img src="<?php echo $ligne->numero_membre.'.jpeg' ?>" >
</div>

<?php
}
 ?>
<!-- 
//2 ème methode :
$requete=$db->prepare("Select * from course");
$requete->execute();
while($ligne=$query->fetch(PDO::FETCH_OBJ)) {
} -->

