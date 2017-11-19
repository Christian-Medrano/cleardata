<?php include "header.php"; ?>

  <main class="container-fluid bg-light">
      <div class="row py-4">
      <div class="col-md-3"></div>

        <div class="col-md-6">

          <h1>Authentication</h1>

          <form action="">
            <div class="form-row">
              <div class="col-md-4">
                <label for="code">SMS Code</label>
                <input type="number" class="form-control" placeholder="Code" required>
              </div>
            </div>
            <button type="submit" class="btn">Verify</button>
          </form>

        </div>

      </div>
  </main>

<?php include "footer.php" ?>