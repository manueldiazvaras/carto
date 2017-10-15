<?php



$sql = "SELECT

id, id_page, title, url, varios

FROM 
carto_related

WHERE id_page = '$id_page'

ORDER BY id_page ASC;
";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

 	while($row = mysqli_fetch_assoc($result)) {
	
		// Setting variables
		$id = $row["id"];
		$id_page = $row["id_page"];	
		$title = $row["title"];
		$url = $row["url"];
		
		//echo $id;

		}

} else {

	echo 'No articles to display';
}



?>