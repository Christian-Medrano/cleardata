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
				<div class="card-header d-flex align-items-center">
					<input type="checkbox" id="select-all" class="mr-3">
					Total Devices: <span class="total-devices"></span> | Total Selected:
					
					<div class="ml-auto">
						<button class="btn">
							Filter
						</button>
						<button class="btn">
							Download
						</button>
						<button class="btn">
							Customize
						</button>
					</div>
					
				</div>
				<ul class="devices card-body">
					
					<?php $i = 0; ?>
					<?php do{ ?>	

					<li class="device py-3">
						<div class="d-flex align-items-center">
							<input type="checkbox" class="select d-inline align-middle">
						</div>
						<div class="device-attribute border border-secondary p-2">
							Device ID
						</div>
						<div class="device-attribute border border-secondary p-2">
							Carrier
						</div>
						<div class="device-attribute border border-secondary p-2">
							State
						</div>
						<div class="device-attribute border border-secondary p-2">
							Created
						</div>
						<div class="device-attribute border border-secondary p-2">
							Name
						</div>
						<div class="device-attribute border border-secondary p-2">
							Description
						</div>
						<div class="device-attribute border border-secondary p-2">
							Updated
						</div>
						<div class="device-attribute border border-secondary p-2">
							Location
						</div>
						<div class="device-attribute border border-secondary p-2">
							Usage History
						</div>
					</li>

					<?php 
							$i++;
						} while ($i <= 20)
					?>

				</ul>
			</div>
		</div>
	</div>

</main>




<?php include "footer.php"; ?>

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