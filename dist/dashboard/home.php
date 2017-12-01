<?php 

include "header.php"; 
// load device counters
include "counters.php";

?>

<!-- dashboard main content -->
<main class="container-fluid py-3">
	<div class="row">

		<div class="col-md-6">
			<div class="card" style="min-height: 20rem">
				<div class="card-header">
				    Rated Unbilled Usage
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card" style="min-height: 20rem">
				<div class="card-header">
				    Device Groups
				</div>
			</div>
		</div>
	</div>

	<!-- device list -->
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Devices
					<?php include 'device-controls.php'; ?>
					<table class="table" id="devices-card-header"></table>
				</div>
				<div class="card-body h-max device-table">
					<!-- include device table -->
					<?php include 'devicetable.php'; ?>
				</div>
			</div>
		</div>
	</div>

</main>

<?php include "footer.php"; ?>


<script>
	// add class "active" to navigation link
	$('#home').addClass('active');

	// Listen for click on toggle checkbox
	$('#select-all').click(function(event) {   
	    if(this.checked) {
	        // Iterate each checkbox
	        $(':checkbox').each(function() {
	            this.checked = true;                        
	        });
	    } else {
	    	// Iterate each checkbox
	    	$(':checkbox').each(function() {
	    	    this.checked = false;                        
	    	});
	    }
	});

	$('#device-table-header').appendTo('#devices-card-header')
</script>