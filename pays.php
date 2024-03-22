<?php
require_once 'inc/manager-db.php'; 
require_once 'header.php';?>

<?php $id = $_GET['id'];

$pays = getpaysinfo($id); ?>


<h1><img src="images/drapeau/<?php echo strtolower($pays->Code2);?>.png"></h1>
<h3><?php echo $pays->id ?> </h3>
<h1><?php echo $pays->Name ?></h1>           
<h2>Population :<?php echo $pays->Population ?></h2>
<h2>Continent :<?php echo $pays->Continent ?></h2>
<h2>Capital :<?php echo getcapital($pays->Capital)?></h2>
<h2>Dirigeant : <?php echo $pays->HeadOfState ?></h2>          
<?php require_once 'footer.php'; ?>