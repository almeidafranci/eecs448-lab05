<?php 
$idsToDelete = array();
if(isset($_POST['delete'])){
	foreach ($_POST['delete'] as $id) {
		array_push($idsToDelete, $id);
	}
}
$idsText = implode(", ", $idsToDelete);

include 'conex.php';

$query = "DELETE posts WHERE post_id IN ($idsText)";
if ($mysqli->query($query)) {
	echo "IDs of deleted posts: ".$idsText;
}
?>