<?php

include ('base_pdo.php');

$id=isSet($_GET['id']) ? intval($_GET['id']) : 0;




if($id>0)
	{
		$sth=$pdo->prepare('DELETE FROM candidates WHERE id= :id');
		$sth->bindParam (':id',$id);
		$sth->execute();

		header('location: list2.php');
	}

	else {
		header('location: list2.php');
	}

?>
