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
				<button class="btn">
					Filter
				</button>
				<button class="btn">
					Download
				</button>
				<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
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

<!-- column customization modal -->
<div id="exampleModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

<script>
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

<?php include "footer.php"; ?>