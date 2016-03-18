<?php 
$idsToDelete;
if(isset($_POST['delete'])){
	for ($i=0; $i < count($_POST['delete']); $i++) { 
		if ($_POST['delete'][$i]=="on") {
			array_push($idsToDelete, $_POST['id'][$i]);
		}
	}
}
echo implode(", ", $idsToDelete);
?>