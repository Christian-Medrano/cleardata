<table id="device_data" class="table table-hover">
	<thead id="device-table-header" class="thead-dark">
		<tr>
			<td><input type="checkbox" id="select-all"></td>
			<td><strong>Device ID</strong></td>
			<td><strong>Carrier</strong></td>
			<td><strong>State</strong></td>
			<td><strong>Created</strong></td>
			<td><strong>Name</strong></td>
			<td><strong>Description</strong></td>
			<td><strong>Updated</strong></td>
			<td><strong>Location</strong></td>
			<td><strong>Usage History</strong></td>
		</tr>
	</thead>
	<tbody>
	<?php 
		$i = 1;

		do {
			echo '
				<tr>
					<td><input type="checkbox"></td>
					<td>8393740-1</td>
					<td>Verizon</td>
					<td>California</td>
					<td>11/26/16</td>
					<td>Johnny</td>
					<td>Vending</td>
					<td>10/28/17</td>
					<td>Topanga Mall</td>
					<td>113 GB</td>
				</tr>
			';
			$i++;
		} while ($i <= 20)
	 ?>
	 </tbody>
</table>

<script>

</script>