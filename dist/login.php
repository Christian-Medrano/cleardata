<?php include "header.php"; ?>

    <main class="container-fluid p-0 h-100 bg-dark">
      <div class="row p-0 m-0 h-100">
        <div class="col col-md-4 bg-light m-0 py-4 px-5">
          <h1>Log In</h1>
          <form action="" method="POST">

            <div class="form-group">
              <label for="user" >User ID</label>
              <input type="text" name="user" class="form-control" placeholder="User ID" required>
            </div>
            
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
                  Remember Me
              </label>
            </div>
            <button class="btn">Log In</button>
          </form>
          <p class="mt-4">Don't have account yet? <a href="signup.php">Sign Up</a></p>
        </div>

        <div class="col col-md-8 m-0 p-0 promo-img" style="height: calc(100vh - 56px)">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1902&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
        </div>
      </div>
    </main>

<?php include "footer.php" ?>