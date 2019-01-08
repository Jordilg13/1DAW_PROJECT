<?php
	require('database.php');

	if (isset($_GET['search']) && $_GET['search'] != '') {
		$search = addslashes($_GET['search']);
		
		$suggest_query = db_query("
		SELECT distinct(title) as suggest1 
		FROM suggest 
		WHERE title like('" . $search . "%') 
		ORDER BY title");
		while($suggest = db_fetch_array($suggest_query)) 
			echo $suggest['suggest1'] . "\n";
	}
?>