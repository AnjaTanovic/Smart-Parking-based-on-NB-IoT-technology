<?php
	$conn = new mysqli("localhost", "username", "password", "database name");
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
	
	$result = $conn->query("SELECT free_spot FROM smart_parking ORDER BY spot_number");
	
	$free_spots = "";
	$num_free = 0;
	while($row = $result->fetch_assoc())
	{
		$free_spots .= $row["free_spot"];
		if ($row["free_spot"] == '1')
		{
			$num_free = $num_free + 1;
		}
	}
	$conn->close();
	
	$cars_per_row = 20;
?>

<html>
	<head>
		<link rel="stylesheet" href="parking_board.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="refresh" content="30">
	</head>
	<body>
		
		<img src="parking_sign.png" width="50px" height="40px" align="left">
		<img src="parking_sign.png" width="50px" height="40px" align="right">
		
		<h1>Parking Board</h1>
		<?php echo "<h2>Number of free spots: <b>" . $num_free . "</b></h2>" ?>

		<div class="parking-grid">	
			<?php
			$counter = 0;
			?>
			
			<!--Lines-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<img class="parking-h-line" src="parking_dotted_h_line.png" alt="Parking Line">
				<?php
				$i = $i + 1;
			}
			?>
			<img class="parking-h-line" src="parking_dotted_h_line.png" alt="Parking Line"style="opacity:0;">
			
			<!--Cars row 1-->
		    <?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<?php
				if ($free_spots[$counter] == true)
				{
				?>
					<img class="parking-spot" src="parking_free1.png" alt="Parking Spot">
				<?php
				} 
				else {
				?>
					<img class="parking-spot" src="parking_busy1.png" alt="Parking Spot">
				<?php
				}
				$i = $i + 1;
				$counter = $counter + 1;
			}
			?>
			<img class="parking-v-line" src="parking_dotted_v_line.png" alt="Parking Spot">
			
			<!--Cars row 2-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<?php
				if ($free_spots[$counter] == true)
				{
				?>
					<img class="parking-spot" src="parking_free2.png" alt="Parking Spot">
				<?php
				} 
				else {
				?>
					<img class="parking-spot" src="parking_busy2.png" alt="Parking Spot">
				<?php
				}
				$i = $i + 1;
				$counter = $counter + 1;
			}
			?>
			<img class="parking-v-line" src="parking_dotted_v_line.png" alt="Parking Spot">
			
			<!--Lines-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<img class="parking-h-line" src="parking_dotted_h_line.png" alt="Parking Line">
				<?php
				$i = $i + 1;
			}
			?>
			<img class="parking-h-line" src="parking_dotted_h_line.png" alt="Parking Line" style="opacity:0;">
			
			<!--Cars row 3-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<?php
				if ($free_spots[$counter] == true)
				{
				?>
					<img class="parking-spot" src="parking_free1.png" alt="Parking Spot">
				<?php
				} 
				else {
				?>
					<img class="parking-spot" src="parking_busy1.png" alt="Parking Spot">
				<?php
				}
				$i = $i + 1;
				$counter = $counter + 1;
			}
			?>
			<img class="parking-v-line" src="parking_dotted_v_line.png" alt="Parking Spot">
			
			<!--Cars row 4-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<?php
				if ($free_spots[$counter] == true)
				{
				?>
					<img class="parking-spot" src="parking_free2.png" alt="Parking Spot">
				<?php
				} 
				else {
				?>
					<img class="parking-spot" src="parking_busy2.png" alt="Parking Spot">
				<?php
				}
				$i = $i + 1;
				$counter = $counter + 1;
			}
			?>
			<img class="parking-v-line" src="parking_dotted_v_line.png" alt="Parking Spot">
			
			<!--Lines-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<img class="parking-h-line" src="parking_dotted_h_line.png" alt="Parking Line">
				<?php
				$i = $i + 1;
			}
			?>
			<img class="parking-h-line" src="parking_dotted_h_line.png" alt="Parking Line" style="opacity:0;">
			
			<!--Cars row 5-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<?php
				if ($free_spots[$counter] == true)
				{
				?>
					<img class="parking-spot" src="parking_free1.png" alt="Parking Spot">
				<?php
				} 
				else {
				?>
					<img class="parking-spot" src="parking_busy1.png" alt="Parking Spot">
				<?php
				}
				$i = $i + 1;
				$counter = $counter + 1;
			}
			?>
			<img class="parking-v-line" src="parking_dotted_v_line.png" alt="Parking Spot">
			
			<!--Cars row 6-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<?php
				if ($free_spots[$counter] == true)
				{
				?>
					<img class="parking-spot" src="parking_free2.png" alt="Parking Spot">
				<?php
				} 
				else {
				?>
					<img class="parking-spot" src="parking_busy2.png" alt="Parking Spot">
				<?php
				}
				$i = $i + 1;
				$counter = $counter + 1;
			}
			?>
			<img class="parking-v-line" src="parking_dotted_v_line.png" alt="Parking Spot">
			
			<!--Lines-->
			<?php
			$i = 0;
			while($i < $cars_per_row) {
				?>
				<img class="parking-h-line" src="parking_dotted_h_line.png" alt="Parking Line">
				<?php
				$i = $i + 1;
			}
			?>
			<img class="parking-h-line" src="parking_dotted_h_line.png" alt="Parking Line" style="opacity:0;">
		</div>
		
	</body>
</html>
