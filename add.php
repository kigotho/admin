<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
    $product_name = $_POST['productname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $pdf = $_FILES['pdf']['name'];
    $categories = $_POST['categories'];
    $image = $_FILES['image']['name'];
		
	// checking empty fields
    if(empty($product_name) || empty($description) || empty($price) || empty($pdf) || empty($categories) || empty($image)) {
				
        if(empty($product_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
        if(empty($description)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
        if(empty($price)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        if(empty($pdf)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($image)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        if(empty($categories)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
        $result = mysql_query("INSERT INTO product(product,description,price,pdf,image) VALUES('$product_name','$description','$$price','$pdf','$image','$categories')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
