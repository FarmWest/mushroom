<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/style.css">



</head>
<body>
<div class="grid">
	<div class="login">  
	
			<?php
				$sql = "SELECT user_uid FROM member";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<p>";
						echo "Order Number is ".$row['order_number']; 
						echo "<br>";
						echo "Date is ".$row['date']; 
						
						echo "</p>";
					}
				} else{
					echo "There is a cock up!";
				}

			?>



	
	</div>


</div>
</body>
</html>