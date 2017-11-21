<?php 

include "header.php"; 
include "counters.php";

?>

<!-- device options -->
<div class="container-fluid py-3">
	<div class="row">
		<div class="col col-md-7">
			<form action="">
				<div class="form-row">
					<div class="col-auto">
						<input type="text" class="form-control" placeholder="search devices">
					</div>
					<div class="col-auto">
						<button class="btn">
							Search
						</button>
					</div>
				</div>
			</form>
		</div>

		<div class="col col-md-5 d-flex justify-content-end">
			<button class="btn">
				Customize
			</button>
		</div>
	</div>
</div>
<!-- END device options -->


<main class="container-fluid">
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
	<div class="row py-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Devices
				</div>
				<div class="card-body h-max">
					<?php include 'devicetable.php'; ?>
				</div>
			</div>
		</div>
	</div>

</main>


<script>
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

	$('.total-devices').text('20');

	
</script>

<?php include "footer.php"; ?>