	<?php

	$dbConnection = mysqli_connect('localhost', 'root', '', 'media');
	$new_query = "SELECT * FROM `playlist` ";
	$result =  mysqli_query($dbConnection, $new_query);

	if(mysqli_num_rows($result) == 0) { //if the sql row is empty
		echo "<br><h1>Sorry, no data exists in this table</h1>"; //show this message
	}
	// create a table with the media data to be displayed
	echo "<table class='table table-dark table-striped'>";
	echo "<thead>" . "<tr>". "<td>". "ID". "</td>". "<td>". "view media". "</td>". "<td>". "filetype". "</td>". "<td>". "comment". "</td>". "</tr>". "</thead>"; // create table header

	while($table_row = mysqli_fetch_assoc($result)) // loop and fetch table rows
	{

		$playlist_id = $table_row['id']; 	// sql playlist variables
		$playlist_name = $table_row['name'];
		$playlist_comment = $table_row['comment'];
		$playlist_type = $table_row['filetype'];
		$playlist_url = $table_row['url'];
		
		echo "<tr>". "<td>". $playlist_id. "</td>". "<td>". "<a class='btn btn-primary' href='view.php?id=$playlist_id'>View $playlist_name</a>"."</td>". "<td>". $playlist_type. "</td>". "<td>". $playlist_comment. "</td>". "</tr>";
	}

	echo "</table>";

	?>