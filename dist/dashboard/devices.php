<?php 

include "header.php"; 
include "counters.php";

?>

<!-- device table -->
<main class="container-fluid">
	<?php 
	include 'device-controls.php';
	include 'devicetable.php';
	?>
</main>



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