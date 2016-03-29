<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM product ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Product</td>
		<td>Description</td>
		<td>Price</td>
		<td>PDF</td>
        <td>Categories</td>
        <td>Image</td>
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['product_name']."</td>";
		echo "<td>".$res['description']."</td>";
		echo "<td>".$res['price']."</td>";
        echo "<td>".$res['pdf']."</td>";	
        echo "<td>".$res['categories']."</td>";	
        echo "<td>".$res['image']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
