<?php 

include "header.php"; 
include "counters.php";

?>

<!-- table controls -->
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
			<div class="ml-auto">
				<button type="button" class="btn" data-toggle="modal" data-target="#filterModal">
					Filter
				</button>
				<button class="btn">
					Download
				</button>
				<button type="button" class="btn" data-toggle="modal" data-target="#customizeModal">
					Customize
				</button>
			</div>
		</div>
	</div>
</div>
<!-- END table controls -->


<!-- device table -->
<main class="container-fluid">
	<?php include 'devicetable.php' ?>
</main>

<!-- filters modal -->
<div id="filterModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
              <h5 class="modal-title">Filter Devices</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
    	</div>

    	<div class="container-fluid">
			<div class="card-deck py-3">
				
				<!-- carrier select -->
				<div class="card">
					<div class="card-header">
					    Carrier
					</div>
					<div class="card-body">
						<p class="card-text">
							<input type="checkbox"> AT&amp;T
						</p>
						<p class="card-text">
							<input type="checkbox"> Verizon
						</p>
					</div>
				</div>

				<!-- status select -->
				<div class="card">
					<div class="card-header">
					    Status
					</div>
					<div class="card-body">
						<p class="card-text">
							<input type="checkbox"> Activated
						</p>
						<p class="card-text">
							<input type="checkbox"> Deactivated
						</p>
						<p class="card-text">
							<input type="checkbox"> Suspended
						</p>
						<p class="card-text">
							<input type="checkbox"> Test Ready
						</p>
						<p class="card-text">
							<input type="checkbox"> Activation Ready
						</p>
					</div>
				</div>
			</div>

			<div class="card-deck py-3">
				
				<!-- billing period select -->
				<div class="card">
					<div class="card-header">
					    Billing Period
					</div>
					<div class="card-body">
						<p class="card-text">
							<input type="checkbox"> ...
						</p>
					</div>
				</div>

				<!-- service plan select -->
				<div class="card">
					<div class="card-header">
					    Service Plan
					</div>
					<div class="card-body">
						<p class="card-text">
							<input type="checkbox"> ...
						</p>
					</div>
				</div>
			</div>
		</div>

    	<div class="modal-footer">
    	    <button type="button" class="btn btn-primary">Save Changes</button>
    	    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    	</div>
    </div>
  </div>
</div>
<!-- END column customization modal -->

<!-- column customization modal -->
<div id="customizeModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
              <h5 class="modal-title">Column Customization</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
    	</div>

		<div class="container-fluid">

			<div class="row p-3">
				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Device ID
				</div>

				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Carrier
				</div>

				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					State
				</div>
			</div>

			<div class="row p-3">
				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Created
				</div>

				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Name
				</div>

				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Description
				</div>
			</div>

			<div class="row p-3">
				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Updated
				</div>

				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Location
				</div>

				<div class="option col-4 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Usage History
				</div>
			</div>

		</div>

    	<div class="modal-footer">
    	    <button type="button" class="btn btn-primary">Save changes</button>
    	    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    	</div>
    </div>
  </div>
</div>
<!-- END column customization modal -->

<?php include "footer.php"; ?>

<script>
	// add class active to devices nav link
	$('#devices').addClass('active');

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
</script>