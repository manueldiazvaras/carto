<?php

    // Select BBDD
    require_once ('/home/mdv31226572/public_html/carto/source/bbdd/database_carto.php');
    // Create connection
    require_once ('/home/mdv31226572/public_html/carto/source/bbdd/create_connection.php');

?>

<h2 class="raleway trescientos small"><i class="uk-icon uk-icon-file-o icon-margin-right carto-green"></i>Related content</h2>

<?php

$sql = "SELECT id, id_page, title, uri, varius FROM carto_related WHERE id_page = '$id_page' ORDER BY id_page ASC; ";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

 	while($row = mysqli_fetch_assoc($result)) {
	
		// Setting variables
		$id = $row["id"];
		$id_page = $row["id_page"];	
		$title = $row["title"];
		$uri = $row["uri"];
		$varius = $row["varius"];

		echo '<a id=' . $uri . ' class="raleway cuatrocientos clean-list list-height x-small grey-text margin-li-section-3" href="documentation.php?id=\'' . $uri . '\'">' . $title . '</a><br />';

		}

	} else {
		echo '<p class="raleway cuatrocientos clean-list list-height x-small grey-text margin-li-section-3">No Related content</p>';
}

?>