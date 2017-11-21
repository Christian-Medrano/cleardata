<?php  
 $connect = mysqli_connect("localhost", "root", "", "devices");  
 $query ="SELECT * FROM MOCK_DATA ORDER BY device_id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>

<table id="device_data" class="table table-striped">
	<thead class="thead-light">
		<tr>
			<td><input type="checkbox"></td>
			<td>Device ID</td>
			<td>Carrier</td>
			<td>State</td>
			<td>Created</td>
			<td>Name</td>
			<td>Description</td>
			<td>Updated</td>
			<td>Location</td>
			<td>Usage History</td>
		</tr>
	</thead>
	<?php 
	while($row = msqli_fetch_array($result)){
		echo '
		<tr>
			<td>'.$row["device_id"].'</td>
			<td>'.$row["carrier"].'</td>
			<td>'.$row["state"].'</td>
			<td>'.$row["created"].'</td>
			<td>'.$row["name"].'</td>
			<td>'.$row["description"].'</td>
			<td>'.$row["updated"].'</td>
			<td>'.$row["location"].'</td>
			<td>'.$row["usage_history"].'</td>
		</tr>
		';
	}

	 ?>
</table>

<script>

</script>