<?php include "header.php"; ?>

  <main class="container-fluid bg-light">
  		<div class="row py-4">
  			<div class="col-md-3"></div>
	  		<div class="col-md-6">
	  			<h1>Create Your Account</h1>
	  			<form action="">

					<!-- user info -->
	  				<h4>User Information</h4>
	  				<div class="form-row">
	  				    <div class="col">
	  				      <label for="firstname">First Name</label>
	  				      <input type="text" class="form-control" id="firstname" placeholder="First name">
	  				    </div>
	  				    <div class="col">
	  				      <label for="lastname">Last Name</label>
	  				      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
	  				    </div>
	  				</div>

	  				<div class="form-group">
	  				    <label for="email">Email address</label>
	  				    <input type="email" class="form-control" id="email" placeholder="name@example.com">
	  				  </div>
	  				
	  				<div class="form-group">
	  				    <label for="password">Password</label>
	  				    <input type="password" class="form-control" id="password" placeholder="Password">
	  				</div>

	  				<div class="form-group">
	  				    <label for="phone">Phone Number</label>
	  				    <input type="tel" class="form-control" id="phone" placeholder="555-555-5555">
	  				</div>
	  				<!-- END user info -->
					<hr>
					<!-- company info -->
	  				<h4>Company Info</h4>
					<div class="form-group">
	  				    <label for="company">Company Name</label>
	  				    <input type="text" class="form-control" id="company" placeholder="Company Name">
	  				</div>

	  				<div class="form-group">
	  				    <label for="address1">Address Line 1</label>
	  				    <input type="text" class="form-control" id="address1" placeholder="Line 1">
	  				</div>

	  				<div class="form-group">
	  				    <label for="address2">Address Line 2</label>
	  				    <input type="text" class="form-control" id="address2" placeholder="Line 2">
	  				</div>

	  				<div class="form-row">
	  				    <div class="form-group col-md-6">
	  				      <label for="inputCity">City</label>
	  				      <input type="text" class="form-control" id="inputCity" placeholder="City">
	  				    </div>
	  				    <div class="form-group col-md-4">
	  				      <label for="inputState">State</label>
	  				      <select id="inputState" class="form-control">
	  				        <option selected>Choose...</option>
	  				        	<option value="">...</option>
	  				      </select>
	  				    </div>
	  				    <div class="form-group col-md-2">
	  				      <label for="inputZip">Zip</label>
	  				      <input type="text" class="form-control" id="inputZip" placeholder="Zipcode">
	  				    </div>
	  				  </div>
	  				<!-- END company info -->
					<hr>
					<!-- billing info -->
	  				<h4>Billing Information</h4>

	  				<div class="form-group">
	  					<label for="ccnum">Credit Card Number</label>
	  					<input type="text" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" required>
	  				</div>

	  				<div class="form-group">
	  					<label for="ccname">Name on Card</label>
	  					<input type="text" class="form-control" placeholder="Name on Card" required>
	  				</div>

	  				<div class="form-row">
	  					<div class="form-group col-md-4">
	  						<label for="cvv">CVV Code</label>
	  						<input type="text" class="form-control" placeholder="CVV" required>
	  					</div>

	  					<div class="form-group col-md-4">
	  						<label for="ccexp">Expiration Month</label>
	  						<select id="ccmonth" class="form-control">
	  							<option selected>Month</option>
	  						 	<option value="">...</option>
	  						</select>
	  					</div>

	  					<div class="form-group col-md-4">
	  						<label for="ccexp">Expiration Year</label>
	  						<select id="ccyear" class="form-control">
	  							<option selected>Year</option>
	  						 	<option value="">...</option>
	  						</select>
	  					</div>

	  					
	  				</div>
	  				<!-- END billing info -->
					
					<button type="submit" class="btn">Continue</button>
	  			</form>
	  		</div>
  		</div>
  </main>

<?php include "footer.php" ?>