<?php 

include "header.php"; 
include "counters.php";

?>

<?php include "footer.php"; ?>

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
<!-- END device options -->

<main class="container-fluid">
	<?php include 'devicetable.php' ?>
</main>

<div id="exampleModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
              <h5 class="modal-title">Column Customization</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
    	</div>

		<form action="">
			<div class="form-row p-3">
				<div class="option col-6 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Column
				</div>
				<div class="option col-6 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Column
				</div>
			</div>

			<div class="form-row p-3">
				<div class="option col-6 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Column
				</div>
				<div class="option col-6 p-3 d-flex align-items-center">
					<label class="switch mr-3">
					  <input type="checkbox" checked>
					  <span class="slider round"></span>
					</label>
					Column 
				</div>
			</div>
	
		</form>

    	<div class="modal-footer">
    	    <button type="button" class="btn btn-primary">Save changes</button>
    	    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    	</div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





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