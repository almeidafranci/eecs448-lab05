<?php 
$idsToDelete = array();
if(isset($_POST['delete'])){
	foreach ($_POST['delete'] as $id) {
		array_push($idsToDelete, $id);
	}
}
echo implode(", ", $idsToDelete);
?>